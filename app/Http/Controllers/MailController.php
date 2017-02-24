<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Input;
//use Hash;
use App\TempUser;

class MailController extends Controller
{
    //
    public function getSend(){

        $input = Input::all();
        $name =$input['name'];
        $password =$input['password'];
        $mail =$input['mail'];
        //傳入temp_data
        TempUser::insert([
                    'name'=>$name,
                    'password'=>$password,
                    'email' =>$mail,]);
                    
        $temp_user = TempUser::where('email', '=', $mail)->first();
        $temp_user_id = $temp_user->id;
    	Mail::raw('請進入以下網址進行驗證 http://127.0.0.1/lighten/public/signup_finish?id='.$temp_user_id, function($message)
        
		{   
            $message->subject('LIGHTEN 系統驗證');
            $input = Input::all();
            $a =$input['mail'];
			$message->to($a);
		});

        return view('signup_wait');
    	
    }
}
