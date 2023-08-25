<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usre;
use App\Models\Training;


class ExerciseRecord extends Model
{
    use HasFactory;
    
    //protected $fillable = [
    //'count',
    //'weight',
    //'numerical_value',
    //'comment',
    //'user_id',
    //'training_id',
    //];
    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('created_at', 'DESC')->paginate($limit_count);
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
