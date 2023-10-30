<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
     public function index()
    {
        // この部分を実際のデータ取得に置き換えてください。
        $labels = ['January', 'February', 'March', 'April', 'May'];
        $data = [10, 20, 30, 40, 50];

        dd($labels);
        return view('body_records/body', compact('labels', 'data'));
    }
}
