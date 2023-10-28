<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BodyRecordRequest;
use App\Models\BodyRecord;
use App\Models\User;
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
    
    
    public function store(BodyRecord $body, Request $request)
    {
        $input = $request['body'];
        $body->fill($input)->users()->associate($user)->save();
        return redirect('/body_records/' . $body->id);
        //dd($input);
    }
        //BodyRecord::create(['user_id' => $userId, 'other_coulumn' => 'value']);
        //$BodyRecord -> user_id = Bodyrecord::where('user_id', '=', Auth::id())->first()->id;
        //$body_record = new BodyRecord();
        //$body_record->user_id = \Auth::id();
}