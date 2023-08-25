<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\ExerciseRecord;
use App\Models\Users;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;



class ExerciseRecordController extends Controller
{
   public function exercise(ExerciseRecord $exercise_record)
    {
        return view('exercise_records/exercise')->with(['exercise_records' => $exercise_record->getPaginateByLimit()]);
    }
    
     public function exercise_record()
    {
        return view('exercise_records/exercise');
    }
    
    
}