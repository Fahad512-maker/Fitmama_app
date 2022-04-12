<?php

use App\Models\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Package::class);
            $table->longText('question')->nullable();
            $table->string('type')->nullable();
            $table->longText('options')->nullable();
            $table->integer('sort_num')->nullable();
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
        Schema::dropIfExists('profile_questions');
    }
}
