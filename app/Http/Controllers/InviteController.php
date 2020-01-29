<?php

namespace App\Http\Controllers;

use App\Invite;
use App\Mail\InviteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class InviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function invite()
    {
        // show the user a form with an email field to invite a new user
        return view('invite');
    }

    public function process(Request $request)
    {
       
        //Validation Check
        $request->validate([
            'emails' => 'required|regex:/^.+@.+$/i',
            'messages' => 'required',
        ]);
        // process the form submission and send the invite by email
        // validate the incoming request data

        
        //create a new invite record
        $user = auth()->user();
        $user_id = $user->id;
        $emails = explode(",", $request->get('emails'));

        foreach($emails as $email){
            $email = preg_replace('/\s+/', '', $email);
            do {
                //generate a random string using Laravel's str_random helper
                $token = str_random();
            } //check if the token already exists and if it does, try again
            while (Invite::where('token', $token)->first());
            
            $emailCount = User::where('email', $email)->count();
            if($emailCount != 0){
                continue;
            }
            // send the email
            $invite = Invite::create([
                'sender_id' => $user_id,
                'email' => $email,
                'token' => $token,
                'message' => $request->get('messages')
            ]);
            Mail::to($email)->send(new InviteMail($invite));  
        }
       
        // redirect back where we came from
        // return redirect()
        //         ->back();
        return redirect()->route('invite')->with('success','You have successfully sent message.');
    }

    public function accept($token)
    {
        // here we'll look up the user by the token sent provided in the URL
        // Look up the invite
        if (!$invite = Invite::where('token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        // create the user with the details from the invite
        // User::create(['email' => $invite->email]);
        $inviter_mail = DB::table('invites')->where('token', $token)->value('sender_email');

        // delete the invite so it can't be used again
        $invite->delete();

        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return 'Good job! Invite accepted!';
    }
}
