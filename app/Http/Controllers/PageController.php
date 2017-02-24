<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Auth;
class pageController extends Controller
{
    
    public function index(){
        $f = \DB::table('fixed_reports')->max('like_qua');
        $f1 = \DB::table('fixed_reports')->where('like_qua', '=', $f)->pluck('id');
        $fixed_reports = \DB::table('fixed_reports')->where('id', '=', $f1)->first();
        $reports = \DB::table('reports')->where('id', '=', $fixed_reports->report_id)->first();
    	return view('index',  ['content' => $reports->content,'title' => $reports->title,'id' => $reports->id, 'img' => $reports->img, 'fixed_reports_id' =>$fixed_reports->id, 'f'=>$f1 ]);
    }
    
    //註冊
    public function signup(){
    	return view('signup');
    }

    public function signup_wait(){
    	return view('signup_wait');
    }

    public function signup_finish(){
        $input = Input::all();
        $input_id = $input['id'];
        $temp_id = \DB::table('temp_user')->where('id', '=',  $input_id)->pluck('id');

        $temp_user = \DB::table('temp_user')->where('id', '=',  $temp_id)->first();
    	return view('signup_finish', ['temp_id' =>$temp_user->id,
                                      'temp_name' =>$temp_user->name,
                                      'temp_password' =>$temp_user->password,
                                      'temp_mail' =>$temp_user->email,]);
    }

    public function current(){
    	return view('gow/current');
    }

    //gow
    public function all(){
    	$fixed_reports_id = \DB::table('fixed_reports')->pluck('id');
        $fixed_reports = \DB::table('fixed_reports')->pluck('title');
        $fixed_reports_content = \DB::table('fixed_reports')->pluck('content');
        return view('gow/all',  ['id' => $fixed_reports_id, 'title' => $fixed_reports, 'content' =>$fixed_reports_content]);
    }

    public function transport(){
        $fixed_reports_id = \DB::table('fixed_reports')->where('type', '=', 'transport')->pluck('id');
        $fixed_reports = \DB::table('fixed_reports')->pluck('title');
        $fixed_reports_content = \DB::table('fixed_reports')->pluck('content');
        return view('gow/transport',  ['id' => $fixed_reports_id, 'title' => $fixed_reports, 'content' =>$fixed_reports_content]);
    }

    public function work(){
    	return view('gow/work');
    }

    public function animals(){
    	return view('gow/animals');
    }

    public function school(){
    	return view('gow/school');
    }

    public function environment(){
    	return view('gow/environment');
    }

    public function finance(){
    	return view('gow/finance');
    }
    
    public function net(){
    	return view('gow/net');
    }

    public function speech(){
    	return view('gow/speech');
    }

    //report
    public function report(){
    	return view('report/index');
    }

    public function report_transport(){
    	return view('report/report_transport');
    }

    public function report_work(){
    	return view('report/report_work');
    }

    public function report_animals(){
    	return view('report/report_animals');
    }

    public function report_school(){
    	return view('report/report_school');
    }

    public function report_environment(){
    	return view('report/report_environment');
    }

    public function report_finance(){
    	return view('report/report_finance');
    }
    
    public function report_net(){
    	return view('report/report_net');
    }

    public function report_speech(){
    	return view('report/report_speech');
    }

    //detail
    public function detail(){
        $fixed_reports_id = Input::all();//是fixed_reports_id
        $fixed_reports = \DB::table('fixed_reports')->where('id', '=', $fixed_reports_id)->first();
        $reports = \DB::table('reports')->where('id', '=', $fixed_reports->report_id)->first();
        

        $board_content = \DB::table('board')->where('fixed_reports_id', '=', $fixed_reports->id)->pluck('content');
        $board_time = \DB::table('board')->where('fixed_reports_id', '=', $fixed_reports->id)->pluck('time');
        
        //更新like數
        $like = \DB::table('post_like')->where('fixed_reports_id', '=', $fixed_reports_id)->get();
        $like_qua = count($like) ;
        \DB::table('fixed_reports')->where('id', $fixed_reports->id)->update(['like_qua'=> $like_qua]);
        //更新dislike數
        $dislike = \DB::table('post_dislike')->where('fixed_reports_id', '=', $fixed_reports_id)->get();
        $dislike_qua = count($dislike) ;
        \DB::table('fixed_reports')->where('id', $fixed_reports->id)->update(['dislike_qua'=> $dislike_qua]);

        //留言人數
        $comment_qua = \DB::table('board')->where('fixed_reports_id', '=', $fixed_reports_id)->count();

    	return view('detail', ['content' => $reports->content,
                               'title' => $reports->title,
                               'id' => $reports->id, 
                               'time' => $reports->created_at,
                               'img' => $reports->img,
                               'location' => $reports->location,
                               'fixed_reports_id' => $fixed_reports->id,
                               'fixed_like_qua' => $fixed_reports->like_qua,
                               'fixed_dislike_qua' => $fixed_reports->dislike_qua,
                               'comment_qua' => $comment_qua,
                               //'user_id' => $user_id,
                               
                               'board_content' => $board_content,
                               'board_time' => $board_time,]);
    }
    

    
}