<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use App\Event;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /*
     * to display the orders of users
     * this function will return the orders of a user.function I have not attached it to any
     * view yet.Its your homework to do that
     */
    public function getOrders(){
        $user = Auth::user();
        $orders = $user->orders;
        //dd($orders);
        return view('Events.MyTickets')
            ->with('orders', $orders);
    }

    /*
     * to dispaly the saved events of the user.
     * Same as above .
     * No views attached
     */
    public function getEvents(){
        $user = Auth::user();
        $events = $user->events;
        //dd($events);
        return view('Events.MyEvents')
            ->with('events', $events);

    }
    /*
     * to display the upcoming events of users
     */
    public function upcomingEvents(){

    }

}