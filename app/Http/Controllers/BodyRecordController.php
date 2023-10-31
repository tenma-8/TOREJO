<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BodyRecordRequest;
use App\Models\BodyRecord;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
    

class BodyRecordController extends Controller
{
    public function body(BodyRecord $body_record)
    {
        return view('body_records/body')->with(['body_records' =>$body_record->get()]);//$postの中身を戻り値にする。
    }
    
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
        //blade内で使う変数'posts'と設定。'posts'の中⾝にgetを使い、インスタンス化した$postを代⼊。
    }
    
    public function show(BodyRecord $body)
    {
        return view('body_records/body_show')->with(['body' => $body]);
        //'body'はbladeファイルで使う変数。中⾝は$bodyはid=1のPostインスタンス。
    }
    
   /* public function body_record()
    {
     return view('body_records/body');
    }*/
    
    
    public function store(BodyRecord $body, Request $request)
    {
      
        //$input = $request['body'];
        $input = $request->input('body');
        
        $input['user_id'] = Auth::id();
        
        $body->fill($input)->save();
        
        return redirect('/body_records/'.$body->id);
    }
    
    /* public function body_weight_log(Request $request)
    //{
        //$log_list['user_id'] = Auth::id();
        //$log_list = BodyRecord::wehre("date_key","like",date("Y") . "%")->get();
        //return view('body_records/body',["log_list" =>$log_list]);
    }*/
        //$users = User::all()->BodyRecord::find(1)->users;
        //dd($users);
        //BodyRecord::create(['user_id' => $userId, 'other_coulumn' => 'value']);
        //$BodyRecord -> user_id = Bodyrecord::where('user_id', '=', Auth::id())->first()->id;
        //$body_record = new BodyRecord();
        //$body->fill($input)->user()->associate($user)->save();
        //$body_record->user_id = \Auth::id();
}