
{{-- This page is for showing all events  --}}
@extends('master')
     @section('AllEvents')
        <div class="container clearfix">
            <div class="postcontent nobottommargin">
                <div id="posts" class="events small-thumbs">
                    @foreach($events as $event)
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="#">
                                    <img src="/images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                    <div class="entry-date">{{$event->eventStartDate->format('j')}}<span>{{$event->eventStartDate->format('M')}}</span></div>
                                </a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="{{url('event/'.$event->id)}}">{{$event->eventName}}</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><span class="label label-warning">{{$event->eventType}}</span></li>
                                    <li><a href="#"><i class="icon-time"></i> {{$event->eventStartTime}}</a></li>
                                    <li><a href="#"><i class="icon-map-marker2"></i> {{$event->eventLocation}}</a></li>
                                    @if($event->eventPrice != 0)
                                        <li><a href="#"> Rs. {{$event->eventPrice}}</a></li>
                                    @else
                                        <li><a href="#"> FREE </a></li>
                                    @endif
                                </ul>
                                <div class="entry-content">
                                    <p>{{$event->eventDescription}}</p>
                                    <a href="#" class="btn btn-info" >Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
        {{--<!-- Pagination--}}
        {{--============================================= -->--}}
        {{--<ul class="pager nomargin">--}}
            {{--<li class="previous"><a href="#">&larr; Older</a></li>--}}
            {{--<li class="next"><a href="#">Newer &rarr;</a></li>--}}
        {{--</ul><!-- .pager end -->--}}

    {{--</div>--}}

    {{--<div class="sidebar nobottommargin col_last clearfix">--}}
        {{--<div class="sidebar-widgets-wrap">--}}

            {{--<div class="widget clearfix">--}}

                {{--<h4>Upcoming Events</h4>--}}
                {{--<div id="post-list-footer">--}}

                    {{--<div class="spost clearfix">--}}
                        {{--<div class="entry-image">--}}
                            {{--<a href="#" class="nobg"><img src="images/events/thumbs/1.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="entry-c">--}}
                            {{--<div class="entry-title">--}}
                                {{--<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta">--}}
                                {{--<li>10th July 2014</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="spost clearfix">--}}
                        {{--<div class="entry-image">--}}
                            {{--<a href="#" class="nobg"><img src="images/events/thumbs/2.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="entry-c">--}}
                            {{--<div class="entry-title">--}}
                                {{--<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta">--}}
                                {{--<li>10th July 2014</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="spost clearfix">--}}
                        {{--<div class="entry-image">--}}
                            {{--<a href="#" class="nobg"><img src="images/events/thumbs/3.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="entry-c">--}}
                            {{--<div class="entry-title">--}}
                                {{--<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>--}}
                            {{--</div>--}}
                            {{--<ul class="entry-meta">--}}
                                {{--<li>10th July 2014</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="widget clearfix">--}}

                {{--<h4>Events</h4>--}}
                {{--<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">--}}

                    {{--<div class="oc-item">--}}
                        {{--<div class="iportfolio">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="images/events/thumbs/3.jpg" alt="Mac Sunglasses">--}}
                                {{--</a>--}}
                                {{--<div class="portfolio-overlay">--}}
                                    {{--<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-desc center nobottompadding">--}}
                                {{--<h3><a href="portfolio-single-video.html">Inventore voluptates velit totam ipsa tenetur</a></h3>--}}
                                {{--<span><a href="#">Melbourne, Australia</a></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="oc-item">--}}
                        {{--<div class="iportfolio">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<a href="portfolio-single.html">--}}
                                    {{--<img src="images/events/thumbs/1.jpg" alt="Open Imagination">--}}
                                {{--</a>--}}
                                {{--<div class="portfolio-overlay">--}}
                                    {{--<a href="images/portfolio/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-desc center nobottompadding">--}}
                                {{--<h3><a href="portfolio-single.html">Nisi officia adipisci molestiae aliquam</a></h3>--}}
                                {{--<span><a href="#">Perth, Australia</a></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}


            {{--</div>--}}

            {{--<div class="widget clearfix">--}}

                {{--<h4>Recent Event in Video</h4>--}}
                {{--<iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}

            {{--</div>--}}

            {{--<div class="widget quick-contact-widget clearfix">--}}

                {{--<h4>Quick Contact</h4>--}}
                {{--<div class="quick-contact-form-result"></div>--}}
                {{--<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">--}}
                    {{--<div class="form-process"></div>--}}

                    {{--<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />--}}
                    {{--<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />--}}
                    {{--<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>--}}
                    {{--<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />--}}
                    {{--<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>--}}
                {{--</form>--}}


            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
