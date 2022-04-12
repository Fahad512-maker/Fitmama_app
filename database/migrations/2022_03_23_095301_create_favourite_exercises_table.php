<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_exercises', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->UnsignedBigInteger('exercise_id')->nullable();
            $table->UnsignedBigInteger('article_id')->nullable();
            $table->UnsignedBigInteger('food_recipe_id')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->enum('identity' , ['exercises' , 'articles' , 'food_recipes']);
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
        Schema::dropIfExists('favourite_exercises');
    }
}
