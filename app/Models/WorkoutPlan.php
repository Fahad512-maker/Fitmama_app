<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlan extends Model
{
    use HasFactory;

    protected $fillable=['title' , 'workout_image','equiment_images' , 'equiment_name' , 'instructions' , 'duration'];

     protected $casts = [
        'equiment_name' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
