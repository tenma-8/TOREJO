<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body_part_training extends Model
{
    use HasFactory;
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    
    public function body_part()
    {
        return $this->belongsTo(Body_part::class);
    }
}
