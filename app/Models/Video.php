<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

   protected $fillable=['package_id' ,'title' , 'sets', 'training_weight' ,'description' , 'file' , 'thumbnail', 'is_favourite' , 'status'];


    public function exercise()
    {
        return $this->hasMany(Exercise::class);
    }

    public function categories()
    {
        return $this->belongsTo(ExerciseCategory::class , 'exercise_category_id');
    }
}
