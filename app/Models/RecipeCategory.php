<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['name' , 'image'];

    public function recipes()
    {
        return $this->hasMany(FoodRecipe::class);
    }
}
