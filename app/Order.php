<?php
/*
 * This is the model which will store the orders
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $date = [
        'checkoutDate',
    ];
    public function bookings(){
        return $this->hasOne('App\Booking');
    }


    public function users(){
        return $this->hasOne('App\User');
    }
    public function events(){
        return $this->belongsTo('App\Event');
    }


}
