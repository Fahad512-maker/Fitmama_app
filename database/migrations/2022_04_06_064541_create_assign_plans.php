<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_plan_id')->nullable();
            $table->unsignedBigInteger('food_recipe_id')->nullable();
            $table->date('assign_date')->nullable();
            $table->boolean('is_completed')->nullable();
            $table->datetime('completion_time')->nullable();
            $table->enum('type' , ['workouts' , 'FoodRecipes'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_plans');
    }
}
