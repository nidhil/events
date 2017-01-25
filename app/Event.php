<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'eventName',
        'eventLocation',
        'eventStartTime',
        'eventEndTime',
        'eventStartDate',
        'eventEndDate',
        'eventDescription',
        'eventCategory',
        'eventPrice',
        'eventType',
        'eventTickets',


    ];

    protected $dates = [
        'eventStartDate',
        'eventEndDate',
        'deleted_at'
    ];

    public function bookings(){
        return $this->hasMany('App\Booking');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($event) {
            //dd('event/boot/deleting');
            $event->orders()->delete();
        });
    }

}
