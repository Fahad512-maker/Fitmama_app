<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_plan extends Model
{
    use HasFactory;
    
    protected $fillable=['user_id' , 'workout_plan_id' , 'food_recipe_id' , 'assign_date' , 'is_completed' , 'completion_time' , 'type'];
} 
