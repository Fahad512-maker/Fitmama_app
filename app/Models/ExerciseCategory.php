<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExerciseCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['name' , 'image'];

    public function exercise()
    {
        return $this->hasOne(Exercise::class, 'exercise_category_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class , 'exercise_category_id');
    }
}
