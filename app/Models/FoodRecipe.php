<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodRecipe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title' , 'package_id' , 'image' , 'instructions' , 'recipe_category_id' , 'ingredients_symbols' , 'ingredients' , 'serving' , 'recipe_ready_time' , 'is_premium' , 'is_favourite' , 'is_popular' , 'price'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function category()
    {
        return $this->belongsTo(RecipeCategory::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
