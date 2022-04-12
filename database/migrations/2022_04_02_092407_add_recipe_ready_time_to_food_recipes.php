<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecipeReadyTimeToFoodRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_recipes', function (Blueprint $table) {

         $table->integer('serving')->nullable()->after('ingredients');
         $table->string('ingredients_symbols')->nullable()->after('ingredients');
         $table->string('recipe_ready_time')->nullable()->after('serving');
         $table->boolean('is_favourite')->nullable()->after('is_premium');
         $table->string('is_popular')->nullable()->after('is_favourite');
         $table->string('calories')->nullable()->after('serving');
         $table->boolean('is_added')->nullable()->after('is_popular');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_recipes', function (Blueprint $table) {
            //
        });
    }
}
