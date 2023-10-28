<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Urllist; 


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
    
    public function 腕()
    {
        $training = Training::where('part','like','%'.'上腕二頭筋'.'%')
                            ->orWhere('part','like','%'.'上腕三頭筋'.'%')->get();
         return view('trainings/training_arm',['training' => $training ]);
    }
    
    public function 肩()
    {
        $training = Training::where('part','like','%'.'三角筋（前部）'.'%')
                            ->orWhere('part','like','%'.'三角筋（中部）'.'%')
                            ->orWhere('part','like','%'.'三角筋（後部）'.'%')->get();
        return view('trainings/training_shoulder',['training' => $training]);
    }
    
    public function 背中()
    {
        $training = Training::where('part','like','%'.'広背筋'.'%')
                            ->orWhere('part','like','%'.'僧帽筋'.'%')
                            ->orWhere('part','like','%'.'大円筋'.'%')
                            ->orWhere('part','like','%'.'脊柱起立筋'.'%')->get();
        return view('trainings/training_back',['training' => $training]);
    }
    
    public function 胸()
    {
        $training = Training::where('part','大胸筋')
                            ->orWhere('part','like','%'.'大胸筋(上部)'.'%')
                            ->orWhere('part','like','%'.'大胸筋(中部)'.'%')
                            ->orWhere('part','like','%'.'大胸筋(下部)'.'%')
                            ->orWhere('part','like','%'.'小胸筋'.'%') 
                            ->orWhere('part','like','%'.'前鋸筋'.'%')->get();
        return view('trainings/training_chest',['training' => $training]);
    }
    
    public function 脚()
    {
        $training = Training::where('part','like','%'.'大腿四頭筋'.'%')
                            ->orWhere('part','like','%'.'ハムストリング'.'%')
                            ->orWhere('part','like','%'.'大臀筋'.'%')
                            ->orWhere('part','like','%'.'中臀筋'.'%')
                            ->orWhere('part','like','%'.'腓腹筋'.'%')
                            ->orWhere('part','like','%'.'ヒラメ筋'.'%')->get();
        return view('trainings/training_reg',['training' => $training]);
    }
    
    public function SAQトレーニング()
    {
        $training = Training::where('part','Speed')
                            ->orWhere('part','Agility')
                            ->orWhere('part','Quickness')->get();
        return view('trainings/training_saq',['training' => $training]);
    }
    
     public function バランストレーニング()
    {
        $training = Training::where('part','バランストレーニング')->get();
        return view('trainings/training_balance',['training' => $training]);
    }
    
     public function パワートレーニング()
    {
        $training = Training::where('part','パワートレーニング')->get();
        return view('trainings/training_power',['training' => $training]);
    }
    
     public function 持久力トレーニング()
    {
        $training = Training::where('part','持久力トレーニング')->get();
        return view('trainings/training_stamina',['training' => $training]);
    }
     
     public function 柔軟トレーニング()
    {
        $training = Training::where('part','柔軟トレーニング')->get();
        return view('trainings/training_flexible',['training' => $training]);
    }
    
    public function show(Training $training)
    {
        return view('trainings/show')->with(['training' => $training]);
    }
    
}
//->getPaginateByLimit()