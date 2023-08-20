<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Body_record;
use App\Models\users;


class ExerciseRecordController extends Controller
{
    public function index(Body_record $body_record)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $body_record->get();//$postの中身を戻り値にする。
    }
    
    public function index(User $user)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $user->get();//$postの中身を戻り値にする。
    }
}