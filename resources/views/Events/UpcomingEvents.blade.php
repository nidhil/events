
    <div class="container clearfix">

        <div class="col_three_fifth bothsidebar nobottommargin">

            <div class="fancy-title title-border">
                <h3>Upcoming Events</h3>
            </div>

            <div id="posts" class="events small-thumbs">
                @foreach($events as $key => $event)
                    <div class="entry clearfix">
                        <div class="entry-image hidden-sm">
                            <a href="#">
                                <img src="images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
                                <div class="entry-date">{{$event->eventStartDate->day}}<span>Apr</span></div>
                            </a>
                        </div>
                        <div class="entry-c">
                            <div class="entry-title">
                                <h2><a href="#">{{$event->eventName}}</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><span class="label label-warning">{{$event->eventType}}</span></li>
                                <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
                                <li><a href="#"><i class="icon-map-marker2"></i> {{$event->eventLocation}}</a></li>
                            </ul>
                            <div class="entry-content">
                                <a href="#" class="btn btn-default" disabled="disabled">Buy Tickets</a> <a href="#" class="btn btn-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

        <div class="col_two_fifth nobottommargin col_last">

            <div class="fancy-title title-border">
                <h4>Favourite Locations</h4>
            </div>

            <div id="google-map4" style="height: 300px;" class="gmap bottommargin"></div>


            <div class="fancy-title title-border">
                <h4>Gallery</h4>
            </div>

            <div class="col_full masonry-thumbs col-4 clearfix" data-lightbox="gallery">
                <a href="images/events/1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
                <a href="/images/events/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
                <a href="/images/events/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
                <a href="/images/events/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
                <a href="/images/events/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
                <a href="/images/events/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
                <a href="/images/events/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
                <a href="/images/events/8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/8.jpg" alt="Gallery Thumb 8"></a>
            </div>

            <div class="fancy-title title-border">
                <h4>Video</h4>
            </div>

            <iframe src="//player.vimeo.com/video/30626474" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        </div>

        <div class="clear"></div>




    </div>
