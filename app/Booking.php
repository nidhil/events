<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'contactNo',
        'quantity',
        'bookingType',
    ];
    public function events(){
        return $this->belongsTo('App\Event');
    }
    public function orders(){
        return $this->hasOne('App\Order');
    }

}
