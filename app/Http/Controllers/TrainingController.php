<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Training;
//use App\Models\Users;
//use App\Models\CategoryTraining;
use Illuminate\Support\Facades\Auth;


class TrainingController extends Controller
{
    public function summary(Training $training_summary)
    {
        return view('trainings/training_summary')->with(['trainings' => $training_summary->get()]);
    }
    
    public function レジスタンストレーニング()
    {
        return view('trainings/training_resistance');
    }
    
    public function 腕(Training $training)
    {
        return view('trainings/training_arm')->with(['trainings' => $training->getPaginateByLimit()]);
    }
    
    public function show(Training $training)
    {
        return view('trainings/show')->with(['trainings' => $training]);
    }
    
}
//->getPaginateByLimit()