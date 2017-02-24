<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use Input;

use Redirect;
class BoardController extends Controller
{
    //
    public function bor_insert(){
        $input = Input::all();
        $content = $input['content'];
        $user_id = $input['user_id'];
        $fixed_reports_id = $input['fixed_reports_id'];
        $datetime = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 
    Board::insert([
        'fixed_reports_id'=>$fixed_reports_id,
        'user_id'=>$user_id,
        'content'=>$content,
        'time'=>$datetime,
    ]);
    
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
