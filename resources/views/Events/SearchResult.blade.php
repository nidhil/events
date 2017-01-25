

{{-- This page is for showing all events  --}}
@extends('master')
@section('SearchResult')
        <!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">

        <!-- replace your keyword with search keyword
   ============================================= -->
        <h1>Search Results for "{{$event}} at {{$location}}" </h1>

        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Search</li>
        </ol>
    </div>





    <div class="row topmargin-sm" style="    margin: 0px 20px;">

        <!-- SINGLE EVENT BLOCK STARTED
============================================= -->
        @if(count($events) != 0)
            @foreach($events as $event)
                <div class="col-md-3 col-sm-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="images/events/thumbs/1.jpg" alt="Event pic" style="height: 167px;">
                    </div>
                    <div class="team-desc team-desc-bg">
                        <div class="team-title"><h4><a href="{{url('event/'.$event->id)}}">{{$event->eventName}}</a></h4><p>{{$event->eventDescription}}</p><span>{{$event->eventLocation}}</span></div>
                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
                    No search Found
        @endif


    </div>

</section><!-- #page-title end -->


@endsection
{{----}}
    {{--{{$event->eventName}}--}}
    {{--{{$event->eventLocation}}--}}
{{--@endforeach--}}