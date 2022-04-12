<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitTermsAndCondition extends Model
{
    use HasFactory;

    protected $fillable=['user_id' , 'terms_and_condition_id' , 'is_accepted'];
}
