<?php

namespace App\Http\Controllers;
 

use Input;
use Illuminate\Support\Facades\Validator;
use Auth;
use Redirect;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    
    

    public function show()
    {
        //return View::make('login');
        return view('login');
    }

    public function login()
    {   
        $input = Input::all();
        //required是設定為必填語法
        $rules = ['email'=>'required|email',
                'password'=>'required'
                ];
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            //Auth做驗證,成功回傳true,可以把它導向內部頁面
            $attempt = Auth::attempt([
                'email' => $input['email'],
                'password' => $input['password']
            ]);
            if ($attempt) {
                return Redirect::intended('index');
            }
            return Redirect::to('login')
                    ->withErrors(['fail'=>'Email or password is wrong!']);
        }
        //fails
        return Redirect::to('login')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
    }

    public function logout()
    {
         Auth::logout();
        return Redirect::to('index');
    }
   
}