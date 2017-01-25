<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Booking;
use App\Event;
use App\Order;
use App\User;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Webpatser\Uuid\Uuid;

class BookingController extends Controller
{
    //define a variable for saving quantity of tickets
    public  $quantity = 0 ;
    public $order;
    public $event;


    /**
     * method to get the quantity and return the checkout view
     * @param Request $request
     * @return $this
     */
    public function getQuantity(Request $request){
        //get the event id
        $event= Event::find($request->input('id'));
        //get the quantity
        $this->quantity = $request->input('quantity');
        //return the checkout view
        return view('Events.checkout')->with('quantity',$this->quantity)
            ->with('event', $event);
    }

    /**
     * @param Request $request
     */
    public function checkout(Request $request){
        $this->quantity = $request->input('quantity');
        $booking = new Booking;
        $booking->firstName = $request->input('firstName');
        $booking->lastName = $request->input('lastName');
        $booking->email = $request->input('email');
        $booking->quantity = $this->quantity;
        $this->event= Event::find($request->input('id'));
        $this->event->eventTickets = $this->event->eventTickets- $this->quantity;
        $this->event->save();
        $this->event->bookings()->save($booking);



        $user = User::where('email', '=' , $request->input('email'))->firstorfail();

        $user->bookings()->save($booking);
        $this->order = new Order;
        $this->getOrder();

        //$this->order->bookings()->save($booking);
        //$this->order->users()->attach($user);
        $this->order->save();
        $user->orders()->save($this->order);
        $this->event->orders()->save($this->order);
        $user->events()->save($this->event);
        $request->session()->flash('message', 'ordered successfully!');
        return redirect('event/'.$this->event->id);

    }

    public function getOrder(){
        $order = $this->order;
        $price = $this->event->eventPrice;
        $totalAmount = $price * $this->quantity;
        $order->totalAmount = $totalAmount;
        $order->quantity = $this->quantity;
        $order->checkoutDate = Carbon::now();
        $order->orderId = Uuid::generate();
        $order->eventName = $this->event->eventName;
    }



}
