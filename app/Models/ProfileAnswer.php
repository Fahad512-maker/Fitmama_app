<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileAnswer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['answer' , 'user_id' , 'profile_question_id'];

      protected $casts = [
        'answer' => 'array',
    ];

    public function question()
    {
        return $this->belongsTo(ProfileQuestion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
