<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BodyRecordRequest;
use App\Models\BodyRecord;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BodyRecordController extends Controller
{
    public function body(BodyRecord $body_record)
    {
        return view('body_records/body')->with(['body_records' =>$body_record->get()]);//$postの中身を戻り値にする。
    }
    
    public function index(BodyRecord $body)
    {
        return view('body_records/body')->with(['body' => $body->get()]);
        
    }
    
    public function show(BodyRecord $body)
    {
        return view('body_records/body_show')->with(['body' => $body]);
       
    }
    
    
    public function store(BodyRecord $body, Request $request)
    {
      
        //$input = $request['body'];
        $input = $request->input('body');
        
        $input['user_id'] = Auth::id();
        
        $body->fill($input)->save();
        
        return redirect('/body_records/'.$body->id);
    }
    
    public function showGraph(Request $request)
    {
        $user_id = Auth::id(); // ログイン中のユーザーのIDを取得

        // weightデータを取得
        $data = BodyRecord::where('user_id', $user_id)
        ->where('created_at', '>=', Carbon::now()->subMonth())
        ->select('created_at','weight')
        ->get();
        
        
        return view("/body_records/body",["data" => $data]);
    }
}
    
  
	
      
