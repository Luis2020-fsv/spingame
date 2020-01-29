<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use App\UploadImg;
/**
 * Description of WelcomeController
 *
 * @author admin11
 */
class WelcomeController {

    public function index(){
        $users=DB::table('users')->orderBy('id', 'desc')->get();
        $prizes = DB::table('prizes')->orderBy('id', 'desc')->get();
        $query="SELECT user_prize_won.spin_index,user_prize_won.created_at,users.firstname,users.lastname,users.email,prizes.prize_name,prizes.img_url FROM user_prize_won INNER JOIN users ON(user_prize_won.user_id=users.id) INNER JOIN prizes ON(user_prize_won.prize_id=prizes.id) WHERE YEARWEEK(user_prize_won.created_at) = YEARWEEK(NOW())";
        $thisweek_prize_winners=DB::select($query);
        $data['winners']=$thisweek_prize_winners;
        //Dynamic images array path
        $dir = public_path().'/uploads/scroll_images/';
        $data['imgs_array'] = glob($dir.'*.*');
        // Static image path
        $static_dir = public_path().'/uploads/static_image/';
        $data['staticImgs_array'] = glob($static_dir.'*.*');
        
        $myfile = fopen("scroll_text.txt", "r") or die("Unable to open file!");
        $data['scroll_text'] = fread($myfile,filesize("scroll_text.txt"));
        fclose($myfile);

        return view('welcome', $data);
    }
    //put your code here
    public function verifyEmail(Request $request){
        $user=DB::select('SELECT * FROM users WHERE verify_nonce=?',[$request->nonce]);
        if($user){
            $user=DB::update('UPDATE users SET email_verified_at=? ,activated=? WHERE id=?',[date("Y-m-d H:i:s"),1,$user[0]->id]);
            Session::flash('message', 'verified your email!');
            return view('welcome');
            //return redirect()->route('home');
        }else{
            Session::flash('message', 'invalid email!');
            return view('welcome');
        }
    }
    public function passwordReset(Request $request){
        return view('resetpassword',['nonce'=>$request->nonce]);
    }
    public function passwordResetConfirm(Request $request){
        $user=DB::select('SELECT * FROM users WHERE verify_nonce=?',[$request->nonce]);
        if($user){
            $user=DB::update('UPDATE users SET password=?,activated=? WHERE id=?',[Hash::make($request->newpassword),1,$user[0]->id]);
            Session::flash('message', 'Your password has been reseted');
            return view('auth/login');
            //return redirect()->route('home');
        }else{
            Session::flash('message', 'invalid try!');
            return view('auth/login');
        }
    }
    public function lostPassword(Request $request){
        $user = User::whereEmail($request->email)->first();
        
        if($user){
            $to = $request->email;
            $subject = 'Lost Password Reset.';
            $nonce=md5($user->password.$user->email);
            $data = [
                'title' => 'Hi there',
                'nonce'  => $nonce,
                'user'  => $user->username
            ];

            Mail::send('auth/resetpasswordmail', $data, function($message) use($to, $subject) {
                $message->to($to)->subject($subject);
            });
            $user=DB::update('UPDATE users SET verify_nonce=? WHERE id=?',[$nonce,$user->id]);
            Session::flash('success_message', 'We have sent password reset link to your email!');
            return view('lostpass');
            //return redirect()->route('home');
        }else{
            Session::flash('fail_message', 'invalid email!');
            return view('lostpass');
        }
    }
    public function winners(Request $request ){
        $affected = DB::table('user_prize_won')
                      ->where('id', $request->id)
                      ->update(['present_flag' => 1]);
        // Auth::user()->notify(new SprizeWon('Present'));
      return response()->json(['result'=>'successful!']);
    }


    public function index_api(){
        $users=DB::table('users')->orderBy('id', 'desc')->get();
        $prizes = DB::table('prizes')->orderBy('id', 'desc')->get();
        $query="SELECT user_prize_won.spin_index,user_prize_won.created_at,users.firstname,users.lastname,users.email,prizes.prize_name,prizes.img_url FROM user_prize_won INNER JOIN users ON(user_prize_won.user_id=users.id) INNER JOIN prizes ON(user_prize_won.prize_id=prizes.id) WHERE YEARWEEK(user_prize_won.created_at) = YEARWEEK(NOW())";
        $thisweek_prize_winners=DB::select($query);
        $data['winners']=$thisweek_prize_winners;
        //Dynamic images array path
        $dir = public_path().'/uploads/scroll_images/';
        $data['imgs_array'] = glob($dir.'*.*');
        // Static image path
        $static_dir = public_path().'/uploads/static_image/';
        $data['staticImgs_array'] = glob($static_dir.'*.*');
        $myfile = fopen("scroll_text.txt", "r") or die("Unable to open file!");
        $data['scroll_text'] = fread($myfile,filesize("scroll_text.txt"));
        fclose($myfile);
        return response()->json([
            [ 'dynamicImg_array' => $data['imgs_array'], 'staticImgs_array' => $data['staticImgs_array'] ],
            [ 'scroll_text' => $data['scroll_text'], 'winners' => $data['winners'] ]
        ]); 
        // $payload =  [ 'dynamicImg_array' => $data['imgs_array'], 'staticImgs_array' => $data['staticImgs_array'],
        //              'scroll_text' => $data['scroll_text'], 'winners' => $data['winners'] ];
        // $token = $user->generateToken();
        // $headers = ['Authorization' => "Bearer $token"]; 

        // return json('GET', '/api/home', $payload, $headers)
        //     ->assertStatus(200)
        //     ->assertJson();
        
    }
}

