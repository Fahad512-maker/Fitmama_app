<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteExercise extends Model
{
    use HasFactory;

    protected $fillable=['user_id' , 'exercise_id' , 'article_id' , 'food_recipe_id' , 'status' , 'identity'];

    public function user()
     {
         return $this->belongsTo(User::class);
     } 

     public function exercise()
     {
         return $this->belongsTo(Exercise::class);
     }
}
