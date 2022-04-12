<?php

use App\Models\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->longText('image')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignIdFor(Package::class)->nullable();
            $table->boolean('online_status')->default(false);
            $table->string('steps_goal')->nullable();
            $table->string('foot_steps')->nullable();
            $table->string('water_intake_goal')->nullable();
            $table->string('water_intake')->nullable();
            $table->string('caloric_burn_goal')->nullable();
            $table->string('caloric_burn')->nullable();
            $table->string('caloric_burn_limit')->nullable();
            $table->string('initial_body_weight')->nullable();
            $table->string('initial_body_goal')->nullable();
            $table->string('current_weight')->nullable();
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
        Schema::dropIfExists('users');
    }
}
