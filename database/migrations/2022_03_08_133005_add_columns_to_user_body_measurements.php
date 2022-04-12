<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserBodyMeasurements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_body_measurements', function (Blueprint $table) {
            
             $table->string('biceps')->nullable()->after('waist');
            $table->string('thighs')->nullable()->after('biceps');
            $table->string('chest')->nullable()->after('thighs');
            $table->string('date')->nullable()->after('height');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_body_measurements', function (Blueprint $table) {
            //
        });
    }
}
