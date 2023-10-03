<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\BodyRecord;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;


class BodyRecordController extends Controller
{
    public function body(BodyRecord $body_record)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('body_records/body')->with(['body_records' =>$body_record->get()]);//$postの中身を戻り値にする。
    }
    
    public function body_record()
    {
        return view('body_records/body');
    }
    
    
    public function store(Request $request, BodyRecord $body)
    {
        //$body_record = new BodyRecord();
        $body_record->user_id = \Auth::id();
        $input = $request['body'];
        $body->fill($input)->save();
        return redirect('/body_records/' . $body->id);
    }

}