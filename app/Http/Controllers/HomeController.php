<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Notifications\SprizeWon;
use App\User;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        setcookie("bgm_on", $user->bgm_on);
        return view('home');
    }
    public function buyTokenView(){
      
        $user = Auth::user();
        
        $token_count = DB::table('users')->where('id', $user->id)->value('token_count');
        
        $float_token = (float) $token_count;
        $is_half_token = $float_token - intval($float_token);
        return view('buytokenview', ['user' => $user, 'token_count'=>$user->token_count, 'is_half_token' => $is_half_token]);
    }
    public function showgameList($type)
    {
        $user = Auth::user();
        $category=1;
        $style_text = "game_style_img_lifestyle.png";
        if ($type == "electronics") {
            $category=2;
            $style_text = "game_style_img_electronics.png";
        } elseif ($type == "eating") {
            $category=3;
            $style_text = "game_style_img_eating_and_drinking.png";
        }
     
        $current_time_str=date('Y-m-d H:i:s',time()+3600);
        $addprizes = DB::select("SELECT * FROM prizes WHERE start_time > '".$current_time_str."'AND  prize_category=".$category);
        $addprizes = array_map(function ($value) {
            return (array)$value;
        }, $addprizes);
        $prizes=DB::select("SELECT * FROM prizes WHERE start_time<='".$current_time_str."' AND expire_time>'".$current_time_str."' AND  prize_category=".$category);
        $prizes = array_map(function ($value) {
            return (array)$value;
        }, $prizes);
        $user_prize_infos=DB::select("SELECT * FROM user_prize WHERE user_id=".$user->id);
        $user_prize_infos = array_map(function ($value) {
            return (array)$value;
        }, $user_prize_infos);
        $user_prize_spin_counts=array();
        foreach ($user_prize_infos as $user_prize_info) {
          $user_prize_spin_counts[$user_prize_info['prize_id']]=$user_prize_info['spin_count'];
        }
        //setcookie("bgm_on", $user->bgm_on);

        foreach($prizes as $key=>$prize){
          $prizes[$key]['remain_winners_cash']=$prize['winners_cash'];
          $prizes[$key]['remain_winners_n500']=$prize['winners_n500'];
          $prizes[$key]['remain_winners_mystery_prize']=$prize['winners_mystery_prize'];
          $prizes[$key]['remain_winners_jackpot']=$prize['winners_jackpot'];
          $prize_won_infos= DB::table('user_prize_won')
                       ->select(DB::raw('count(*) win_count, spin_index'))
                       ->where('prize_id', '=', $prize['id'])
                       ->groupBy('spin_index')
                       ->get();
          foreach ($prize_won_infos as  $prize_won_info) {
            if($prize_won_info->spin_index==2){
              $prizes[$key]['remain_winners_cash']=$prize['winners_cash']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==4){
              $prizes[$key]['remain_winners_n500']=$prize['winners_n500']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==7){
              $prizes[$key]['remain_winners_mystery_prize']=$prize['winners_mystery_prize']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==11){
              $prizes[$key]['remain_winners_jackpot']=$prize['winners_jackpot']-$prize_won_info->win_count;
            }
            // code...
          }
        }
        return view('gameList', ['style' => $style_text,'user_prize_spin_counts'=>$user_prize_spin_counts,'user_info'=>$user,'prizes'=>$prizes, 'addprizes' => $addprizes]);
    }
    public function spinroom(Request $request){
        $user = Auth::user();
        $prize_id=$request->input('prize');
        //$query="SELECT user_prize.*,prizes.token_count as ptoken_count FROM user_prize RIGHT OUTER JOIN prizes ON(user_prize.prize_id=prizes.id) WHERE user_id=".$user->id." AND prize_id=".$prize_id;
        $prize_info = DB::table('user_prize') ->select('user_prize.*','prizes.prize_name','prizes.cash_price','prizes.mystery_prize', 'prizes.token_count as ptc','prizes.expire_time')->join('prizes', 'user_prize.prize_id', '=', 'prizes.id','left outer')->where([
            ['user_id', '=',$user->id],
            ['prize_id', '=', $prize_id],
        ])->get()->first();
        if(!$prize_info){
            $prize_info = DB::table('prizes') ->select('prize_name','cash_price','mystery_prize','token_count as ptc','expire_time')->where([
                ['id', '=', $prize_id],
            ])->get()->first();
            $prize_info->spin_count=config('constants.default_spin_count');
            DB::update('UPDATE users SET token_count=token_count-' . $prize_info->ptc . ' WHERE id=?', [$user->id]);
            DB::table('user_prize')->insert([
                ['user_id' => $user->id, 'prize_id' => $prize_id, 'spin_count' => config('constants.default_spin_count'), 'created_at' => date('Y-m-d G:i:s')]
            ]);

        }else {
          if(!$prize_info->spin_count){
            DB::update('UPDATE users SET token_count=token_count-' . $prize_info->ptc . ' WHERE id=?', [$user->id]);
            DB::update('UPDATE user_prize SET spin_count='.config('constants.default_spin_count').' WHERE id=?', [$prize_info->id]);
            $prize_info = DB::table('prizes') ->select('prize_name','cash_price','mystery_prize','token_count as ptc','expire_time')->where([
                ['id', '=', $prize_id],
            ])->get()->first();
            $prize_info->spin_count=config('constants.default_spin_count');
          }
        }
       
        if(strtotime($prize_info->expire_time)<(time()+3600)){
            return redirect()->route('dashboard');
        }
        //$prize_info=DB::select($query);
        return view('spinroom',['prize_id'=>$prize_id,'prize_info'=>$prize_info]);
    }
    public function dashboard(Request $request){
        $user = Auth::user();
        //$prize_id=$request->input('prize');
        // $query="SELECT user_prize.* ,prizes.prize_name,prizes.mystery_prize, prizes.prize_cost FROM user_prize INNER JOIN prizes ON(user_prize.prize_id=prizes.id) WHERE user_prize.user_id=".$user->id." AND user_prize.spin_count>0 ORDER BY prizes.id";
        // $prizes=DB::select($query);
        
        // $prizes = array_map(function ($value) {
        //     return (array)$value;
        // }, $prizes);
        // var_dump($prizes);exit;
        
        $current_time_str=date('Y-m-d H:i:s',time()+3600);
        $prize_wons=DB::table('user_prize_won')->join('prizes', 'user_prize_won.prize_id', '=', 'prizes.id')->where('user_prize_won.user_id', $user->id)->select('user_prize_won.created_at', 'user_prize_won.user_id', 'prizes.*', 'user_prize_won.spin_index', 'user_prize_won.present_flag')->paginate(10);

        $add_prizes = DB::select("SELECT * FROM prizes WHERE start_time < '".$current_time_str."'AND expire_time>'".$current_time_str. "'" );
        $add_prizes = array_map(function ($value) {
            return (array)$value;
        }, $add_prizes);

        $user_prize_infos=DB::select("SELECT * FROM user_prize WHERE user_id=".$user->id);
        $user_prize_infos = array_map(function ($value) {
            return (array)$value;
        }, $user_prize_infos);
        $user_prize_spin_counts=array();
        foreach ($user_prize_infos as $user_prize_info) {
          $user_prize_spin_counts[$user_prize_info['prize_id']]=$user_prize_info['spin_count'];
        }

        foreach($add_prizes as $key=>$prize){
          $add_prizes[$key]['remain_winners_cash']=$prize['winners_cash'];
          $add_prizes[$key]['remain_winners_n500']=$prize['winners_n500'];
          $add_prizes[$key]['remain_winners_mystery_prize']=$prize['winners_mystery_prize'];
          $add_prizes[$key]['remain_winners_jackpot']=$prize['winners_jackpot'];
          $prize_won_infos= DB::table('user_prize_won')
                       ->select(DB::raw('count(*) win_count, spin_index'))
                       ->where('prize_id', '=', $prize['id'])
                       ->groupBy('spin_index')
                       ->get();
          foreach ($prize_won_infos as  $prize_won_info) {
            if($prize_won_info->spin_index==2){
              $add_prizes[$key]['remain_winners_cash']=$prize['winners_cash']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==4){
              $add_prizes[$key]['remain_winners_n500']=$prize['winners_n500']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==7){
              $add_prizes[$key]['remain_winners_mystery_prize']=$prize['winners_mystery_prize']-$prize_won_info->win_count;
            }else if($prize_won_info->spin_index==11){
              $add_prizes[$key]['remain_winners_jackpot']=$prize['winners_jackpot']-$prize_won_info->win_count;
            }
            // code...
          }
        }

        return view('dashboard' ,['token_count'=>$user->token_count,'prize_wons'=>$prize_wons, 'user_info'=>$user, 'add_prizes' => $add_prizes, 'user_prize_spin_counts'=>$user_prize_spin_counts]);
    }
   

}
