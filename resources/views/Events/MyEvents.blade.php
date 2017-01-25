{{-- This page is for showing all events booked  by user --}}
@extends('master')
@section('MyEvents')
    <div style="margin:0 10%;">
        <h2>My Events</h2>
        <div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-9">

            {{-- Two tabs inside li tag--}}

            <ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-34" aria-labelledby="ui-id-18" aria-selected="true" aria-expanded="true"><a href="#tabs-34" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-18">Upcoming Events</a></li>
                <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-35" aria-labelledby="ui-id-19" aria-selected="false" aria-expanded="false"><a href="#tabs-35" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-19">Saved Events</a></li>
            </ul>

            <div class="tab-container">


                <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-34" aria-labelledby="ui-id-18" role="tabpanel" aria-hidden="false" style="display: block;">


                    {{-- start of upcoming events list--}}
                    <div id="posts" class="events small-thumbs">
                        {{-- start of single event--}}

                        @foreach($events as $key=>$event)
                            @if($event->eventStartDate > \Carbon\Carbon::today())
                                    <div class="entry clearfix">
                                    <div class="entry-image">
                                        <a href="#">
                                            <img src="images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                            <div class="entry-date">{{$event->eventStartDate->format('j')}}<span>{{$event->eventStartDate->format('M')}}</span></div>
                                        </a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h2><a href="#">{{$event->eventName}}</a></h2>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><span class="label label-warning">Private</span></li>
                                            <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                            <li><a href="#"><i class="icon-map-marker2"></i> Melbourne</a></li>
                                        </ul>
                                        <div class="entry-content">
                                            <a href="#" class="btn btn-default">Order Summary</a> <a href="#" class="btn btn-danger">Cancle Order</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- end  of single event--}}
                    </div>{{-- end of upcoming events list--}}

                </div>



                <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-35" aria-labelledby="ui-id-19" role="tabpanel" aria-hidden="true" style="display: none;">

                    {{-- start of saved events list--}}
                    <div id="posts" class="events small-thumbs">
                        {{-- start of 1st saved event item --}}
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="#">
                                    <img src="images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                    <div class="entry-date">10<span>Apr</span></div>
                                </a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><span class="label label-warning">Private</span></li>
                                    <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> Melbourne</a></li>
                                </ul>
                                <div class="entry-content">
                                    <a href="#" class="btn btn-default">Buy Tickets</a> <a href="#" class="btn btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                        {{-- end of 1st saved event item --}}
                    </div> {{-- end of saved events list--}}



                </div>


            </div>

        </div>
    </div>
@endsection