<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasApiTokens;

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function packages()
    {
        return $this->hasMany(UserPackage::class);
    }

    public function subscribed_package()
    {
        return $this->hasOne(UserPackage::class);
    }

    public function measurements()
    {
        return $this->hasOne(UserBodyMeasurement::class);
    }

    public function meals()
    {
        return $this->hasMany(UserMeal::class);
    }

    public function diaries()
    {
        return $this->hasMany(UserDiary::class);
    }

    public function progress_photos()
    {
        return $this->hasMany(UserProgressPhotos::class);
    }

    public function chat()
    {
        return $this->hasMany(Chat::class);
    }

    public function whishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function achievements()
    {
        return $this->hasMany(UserAchievement::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function payments()
    {
        return $this->hasMany(UserPayment::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }

    public function answers()
    {
        return $this->hasMany(ProfileAnswer::class);
    }

    public function workout()
    {
        return $this->hasOne(WorkoutPlan::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone' ,'package_id' , 'accepted_terms_and_conditions' , 'subscribe_newsletter'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
