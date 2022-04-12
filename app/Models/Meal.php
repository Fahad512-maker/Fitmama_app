<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['user_id' , 'recipe_category_id' , 'title' , 'food_recipe' , 'assign_date'];

    public function food_recipe()
    {
        return $this->hasOne(FoodRecipe::class);
    }
    
}
