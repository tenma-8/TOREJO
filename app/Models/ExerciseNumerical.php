<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Models\Usre;
//use App\Models\Training;


class ExerciseNumerical extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'user_id',
    'training_id',
    'count',
    'weight',
    'created_at',
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
