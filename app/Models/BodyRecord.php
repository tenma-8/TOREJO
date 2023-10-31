<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usre;

class BodyRecord extends Model
{
    use HasFactory;
    
    //protected $table = "body_records";
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'height',
        'weight',
        'user_id'
    ];
    
   
}
