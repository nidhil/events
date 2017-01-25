<?php

namespace App\Http\Controllers;

use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Http\Requests;
use App\Http\Requests\EventRequest;
use App\Event;
use Illuminate\Support\Facades\Auth;



class EventController extends Controller
{
    public function __construct(){
        //$this->middleware('role:admin', ['except' => 'index']);
    }

    /**
     * Display a listing of the events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('this will show the events page');

        $events = Event::all();
        return view('Events.AllEvents')->with('events', $events);
    }


    /**
     * Show the form for creating a new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Dashboard.CreateEvent');
    }

    /**
     * Store a newly created event in database.
     *And assign the role to the user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        $event = new Event;

        $event->eventName = $request->input('eventName');
        $event->eventLocation = $request->input('eventLocation');
        $event->eventStartTime = $request->input('eventStartTime');
        $event->eventEndTime = $request->input('eventEndTime');
        $event->eventStartDate = $request->input('eventStartDate');
        $event->eventEndDate = $request->input('eventEndDate');
        $event->eventDescription = $request->input('eventDescription');
        $event->eventCategory = $request->input('eventCategory');
        $event->eventType = $request->input('eventType');;
        $event->eventTickets = $request->input('eventTickets');
        $event->eventPrice = $request->input('eventPrice');
        $event->save();
        $request->session()->flash('message','New Event Created');
        return redirect('admin/events');

    }

    /**
     * Display the specified event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registered = $this->isEventBooked($id);
        $event = Event::find($id);
        return view('Events.EventDetail')
            ->with('event', $event)
            ->with('registered', $registered);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event =  Event::find($id);

        $event->eventName = $request->input('eventName');
        $event->eventLocation = $request->input('eventLocation');
        $event->eventStartTime = $request->input('eventStartTime');
        $event->eventEndTime = $request->input('eventEndTime');
        $event->eventStartDate = $request->input('eventStartDate');
        $event->eventEndDate = $request->input('eventEndDate');
        $event->eventDescription = $request->input('eventDescription');
        $event->eventCategory = $request->input('eventCategory');
        $event->eventType = $request->input('eventType');;
        $event->eventTickets = $request->input('eventTickets');
        $event->eventPrice = $request->input('eventPrice');
        $event->save();
        $request->session()->flash('message',$event->eventName.' edited');
        return redirect('admin/events');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Event::find($id)->delete();
        $request->session()->flash('message','event deleted');
        return redirect()->back();
    }

    //convert timestamp

    public function convert(){

    }

    public function upcomingEvent()
    {
        //dd(Carbon::today());
        $events = Event::where('eventStartDate', '>', Carbon::today())->get();
        return view('Events.UpcomingEvents')
            ->with('events', $events);
    }
    public function getEventsCategory($category){
        $events = Event::where('eventCategory', $category)->get();
        return view('Events.AllEvents')->with('events', $events);
    }
    /**
     * to check whether this event is booked by user
     * @param $id
     */
    public function isEventBooked($id){
        $event = Event::find($id);
         $users = $event->users;
        foreach($users as $key=> $user){
            //dd();
            if (Auth::check()) {
                // The user is logged in...
                if($user->id == Auth::user()->id){
                    return true;
                }
                return false;
            }

            return false;
        }

    }

}
