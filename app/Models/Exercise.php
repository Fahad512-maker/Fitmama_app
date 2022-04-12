<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['package_id' , 'exercise_category_id' , 'title' , 'training_instructions','description' , 'video_id' , 'rounds' , 'is_popular' , 'is_featured' , 'is_premium' , 'price'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function category()
    {
        return $this->belongsTo(ExerciseCategory::class , 'exercise_category_id');
    }

    // public function videos()
    // {
    //     return $this->hasMany(Video::class);
    // }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function workout()
    {
        return $this->hasMany(Workout::class);
    }
}
