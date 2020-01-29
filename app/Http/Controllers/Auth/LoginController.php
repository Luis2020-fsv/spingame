<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use APP\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user_data = User::where('email', $request->email)->first();
            if($user_data->spin_for_invite > 3)
            {
                $add_token = intdiv($user_data->spin_for_invite, 3);
                $remainder_spin = $user_data->spin_for_invite % 3 ;
                
                User::where('email', $request->email)->update(['token_count'=> $user_data->token_count + $add_token, 'spin_for_invite' => $remainder_spin]);
            }
            $result_array = array('result' => 'success', 'url' => route('home'), 'api_token' => $user_data->api_token);
            return response()->json($result_array);
        }

        $result_array = array('result' => 'fail');
        return response()->json($result_array);
    }
    
    public function login_api(Request $request){
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            $user->generateToken();

            return response()->json([
                'data' => $user->toArray(),
            ]);
        }

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('api')->user();

        if ($user) {
            $user->api_token = null;
            $user->save();
        }

        return response()->json(['data' => 'User logged out.'], 200);
    }
    /**
 * Attempt to log the user into the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return bool
 */

    protected function attemptLogin(Request $request){
        return Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    }
}
