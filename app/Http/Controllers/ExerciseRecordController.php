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
    
    public function create()
    {
        return view('exercise_records/exercise_choise');
    }
    
    public function 筋力トレーニング()
    {
        return view('exercise_records/muscle_create');
    }
    
    public function その他トレーニング()
    {
        return view('exercise_records/exercise_numerical');
    }
    
    public function store(Request $request, ExerciseRecord $exercise_record)
    {
        $exercise_record->user_id = \Auth::id();
        $exercise_record->training_id = \Auth::id();
        $input = $request['exercise_record'];
        $exercise_record->fill($input)->save();
        return redirect('/exercise_records/' . $exercise->id);
    }
}