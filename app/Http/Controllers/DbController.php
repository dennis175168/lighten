<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use App\User;
use Input;
use Hash;
class DbController extends Controller
{
    //
    
    public function report_insert(){
        $input = Input::all();
        $title = $input['title'];
        $contact_person = $input['contact_person'];
        $contact_number = $input['contact_number'];
        $location = $input['locatione'];
        $content = $input['content'];
        $type = $input['type'];

            $file = Input::file('report_image_file');
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;

            $destination_path = public_path().'/user-upload-report/';

            if (Input::hasFile('report_image_file')) {
                $upload_success = $file->move($destination_path, $file_name);
                echo "img upload success!";
            } else {
                echo "img upload failed!";
            }

           // $user_obj = Auth::user();
           // $user_obj->user_icon = $file_name;
           // $user_obj->save();


        Report::insert([
        'title'=>$title,
        'contact_person'=>$contact_person,
        'contact_number'=>$contact_number,
        'location'=>$location,
        'content'=>$content,
        'img' =>$file_name,
        'type'=>$type,
        ]);
        return view('report.report_transport');
    }

    public function user_insert(){
        $input = Input::all();
        $name = $input['name'];
        $password = $input['password'];
        $mail = $input['mail'];


        User::insert([
        'name'=>$name,
        'password'=> Hash::make($password),
        'email'=>$mail,
        ]);
        return view('login');
    }


   
}
