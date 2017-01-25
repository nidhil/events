{{-- This page is for uploafing events --}}

@extends('master')
@section('EventsCalender')
    <div class="parallax bottommargin-lg dark" style="padding: 60px 0; background-image: url('images/parallax/calendar.jpg'); background-repeat: repeat-y; height: auto;" data-stellar-background-ratio="0.3">

        <div class="container clearfix">

            <div class="events-calendar">
                <div class="events-calendar-header clearfix">
                    <h2>Events Calendar</h2>
                    <h3 class="calendar-month-year">
                        <span id="calendar-month" class="calendar-month"></span>
                        <span id="calendar-year" class="calendar-year"></span>
                        <nav>
                            <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
                            <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
                            <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
                        </nav>
                    </h3>
                </div>
                <div id="calendar" class="fc-calendar-container"></div>
            </div>


        </div>

    </div>
    @endsection