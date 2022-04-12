<?php

use App\Models\ProductCategory;
use App\Models\RecipeCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('stock')->nullable();
            $table->foreignIdFor(ProductCategory::class);
            $table->boolean('is_featured')->default(false);
            $table->boolean('status')->default(true);
            $table->boolean('is_external')->default(false);
            $table->longText('external_link')->nullable();
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
        Schema::dropIfExists('products');
    }
}
