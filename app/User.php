<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->token = str_random(30);
        });
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bookings(){
        return $this->hasMany('App\Booking');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function confirmEmail()
    {

        $this->verified = 1;
        $this->token = null;
        $this->save();
    }
}
