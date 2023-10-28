<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BodyRecordRequest extends FormRequest
{
   
    public function rules()
    {
        return [
            'body.height' => 'required|double|max:200.00',
            'body.weight' => 'required|double|max:1000.00',
        ];
    }
}
