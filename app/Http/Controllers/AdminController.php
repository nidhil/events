<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:admin');
    }

    public function index()
    {
        return "Admin's Homepage";
    }
    public function myEvents(){
        $events = Event::all();
//        $event = Event::onlyTrashed()
//            ->where('id', 2)
//            ->firstorfail();
//        dd($event->restore());
        return view('Dashboard.MyEvents',compact('events'));
    }

    public function getEditEvent($id)
    {
        $event = Event::find($id);
        return view('Dashboard.EditEvent', compact('event'));
    }
}
