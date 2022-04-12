<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatScheduleMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_schedule_messages', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->longText('attachment')->nullable();
            $table->longText('message')->nullable();
            $table->date('send_date')->nullable();
            $table->boolean('sent')->default(false);
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
        Schema::dropIfExists('chat_schedule_messages');
    }
}
