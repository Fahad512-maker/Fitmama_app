<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatScheduleMessage extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users()
    {
        return $this->hasMany(ScheduleChatUser::class);
    }
}
