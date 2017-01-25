<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function index(Request $request){
        $location = $request->location;
        $event = $request->event;
        $category = $request->category;
        //dd($location);
        //matching in the database
        if($category == "All Events")
        {
            //dd('its here');
            $events= Event::where('eventLocation', 'like', '%'.$location.'%')
                ->Where('eventName','like', '%'.$event.'%')
                ->get(['id','eventLocation', 'eventName','eventCategory']);
        }
        else{
            $events = Event::where('eventCategory', 'like', $category)
                ->where('eventLocation', 'like', '%'.$location.'%')
                ->Where('eventName','like', '%'.$event.'%')
                ->get(['id','eventLocation', 'eventName','eventCategory',]); //its getting the 'eventLocation', 'eventName','eventCategory'
        }



        return view('Events.SearchResult',compact(['events','event','location']));

    }
}