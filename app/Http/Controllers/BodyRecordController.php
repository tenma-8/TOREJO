<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Body_record;
use App\Models\Users;


class BodyRecordController extends Controller
{
    public function index(Body_record $body_record)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $body_record->get();//$postの中身を戻り値にする。
    }
    

}