<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Body_record;


class testController extends Controller
{
    public function test(Body_record $body_records)
    {
        return view('test')->with(['body_records'=> $body_records->get()]);
    }
}