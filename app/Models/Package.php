<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title' , 'description' , 'checkmark' , 'checkmarked_description' ,  'image' , 'intro_video' , '  splitable' , 'onetime_payment_amount' , 'per_month_payment_amount'];

     protected $casts = [
        'checkmarked_description' => 'array',
    ];

    public function profilequestion()
    {
        return $this->hasMany(ProfileQuestion::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }


}
