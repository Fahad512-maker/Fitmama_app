<?php

use App\Models\ProfileQuestion;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_answers', function (Blueprint $table) {
            $table->id();
            $table->longText('answer')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(ProfileQuestion::class);
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
        Schema::dropIfExists('profile_answers');
    }
}
