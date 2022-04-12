<?php

use App\Models\Package;
use App\Models\RecipeCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignIdFor(Package::class);
            $table->longText('image')->nullable();
            $table->longText('instructions')->nullable();
            $table->foreignIdFor(RecipeCategory::class);
            $table->longText('ingredients')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->decimal('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_recipes');
    }
}
