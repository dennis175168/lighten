<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Dislike;
use Input;
use Auth;

class DislikeController extends Controller
{
    //
    public function dislike(){
        $input = Input::all();
        $fixed_reports_id = $input['fixed_reports_id'];
        $user_id = Auth::user()->id;
        
        $check = Dislike::where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();
        $check1 = Like::where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();//有沒有按過dislike
        

        if($check1==null)//若是沒按過dislike->可以按like
        {
            if($check==null)//若是沒按過
            {   
                Dislike::insert([
                    'fixed_reports_id'=>$fixed_reports_id,
                    'user_id'=>$user_id,
                ]);
                
            }
            else//若是按過
            {
                Dislike::
                where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])
                ->delete();
            }
        }
         else//若是按過dislike->請先取消dislike
        {
            
        }
        
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
