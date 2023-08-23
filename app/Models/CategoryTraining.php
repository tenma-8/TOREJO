<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_training extends Model
{
    use HasFactory;
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
