<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEquimentImagesToWorkoutPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workout_plans', function (Blueprint $table) {
            $table->longText('equiment_images')->nullable()->after('title');
            $table->longText('equiment_name')->nullable()->after('equiment_images');
            $table->longText('instructions')->nullable()->after('equiment_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workout_plans', function (Blueprint $table) {
            //
        });
    }
}
