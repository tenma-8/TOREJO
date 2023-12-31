<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    public function exercise_records()
    {
        return $this->hasMany(Exercise_record::class);
    }
    
    public function exercise_count()
    {
        return $this->hasMany(ExercisCount::class);
    }
    
    public function exercise_numerical()
    {
        return $this->hasMany(ExerciseNumerical::class);
    }
    
    public function category_training()
    {
        return $this->hasMany(Category_training::class);
    }
    
    public function training_suggestions()
    {
        return $this->hasMany(Training_suggestion::class);
    }
    
    public function body_part_trainings()
    {
        return $this->hasMany(Body_part_training::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
