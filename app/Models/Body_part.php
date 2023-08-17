<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body_part extends Model
{
    use HasFactory;
    
    public function body_part_trainings()
    {
        return $this->hasMany(Body_part_training::class);
    }
}
