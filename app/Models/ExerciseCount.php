<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Models\Usre;
//use App\Models\Training;


class ExerciseCount extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'numerical_value',
    'created_at',
    'user_id',
    'training_id',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }

}
