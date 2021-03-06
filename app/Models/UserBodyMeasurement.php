<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserBodyMeasurement extends Model
{
    use HasFactory;
    use SoftDeletes;
         
      protected $fillable=['hips' , 'waist' , 'biceps' , 'thighs' , 'chest' , 'weight' ,'date', 'height', 'user_id'];   
      
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
