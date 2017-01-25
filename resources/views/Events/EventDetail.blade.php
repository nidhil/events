{{-- This page is for showing events detail of any particular event --}}

@extends('master')
@section('EventsDetails')
    <div class="container clearfix" id="event">

        <div class="single-event">

            <div class="col_three_fourth">
                <div class="entry-image nobottommargin">
                    <a href="#"><img src="/images/events/1.jpg" alt="Event Single"></a>
                    <div class="entry-overlay">
                        <span class="hidden-xs">Starts in: </span><div id="event-countdown" class="countdown"></div>
                    </div>
                </div>
            </div>
            <div class="col_one_fourth col_last">
                <div class="panel panel-default events-meta">
                    <div class="panel-heading">
                        <h3 class="panel-title">Event Info:</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="iconlist nobottommargin">
                            <li><i class="icon-calendar3"></i> {{$event->eventStartDate->toFormattedDateString()}} - {{$event->eventEndDate->toFormattedDateString()}}  </li>
                            <li><i class="icon-time"></i> {{$event->eventTime}}</li>
                            <li><i class="icon-map-marker2"></i> {{$event->eventLocation}}</li>
                            <li><i class="icon-euro"></i> <strong>{{$event->eventPrice}}</strong></li>
                        </ul>
                    </div>
                </div>

                @if(!$registered)
                    <button type="button" class="btn btn-success btn-block btn-lg" id="myBtn">Buy Tickets</button>
                @else
                    <button type="button" class="btn btn-success btn-block btn-lg">Booked</button>
                @endif

            </div>

            <div class="clear"></div>

            <div class="col_three_fourth">

                <h3>{{$event->eventName}}</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, voluptatum, amet, eius esse sit praesentium similique tenetur accusamus deserunt modi dignissimos debitis consequatur facere unde sint quasi quae architecto eum!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, nesciunt, sapiente, distinctio obcaecati dolores perspiciatis eveniet adipisci repellendus consequatur ab officiis ipsa laudantium! Provident expedita odio iste corporis nam natus illum. Cupiditate, quis libero distinctio reiciendis quos adipisci eius animi.</p>

                <h4>Inclusions</h4>

                <div class="col_half nobottommargin">

                    <ul class="iconlist nobottommargin">
                        <li><i class="icon-ok"></i> Return Flight Tickets</li>
                        <li><i class="icon-ok"></i> All Local/Airport Transfers</li>
                        <li><i class="icon-ok"></i> Resort Accomodation</li>
                        <li><i class="icon-ok"></i> All Meals Included</li>
                        <li><i class="icon-ok"></i> Adventure Activities</li>
                    </ul>

                </div>

                <div class="col_half nobottommargin col_last">

                    <ul class="iconlist nobottommargin">
                        <li><i class="icon-ok"></i> Erotic Games</li>
                        <li><i class="icon-ok"></i> Local Guides</li>
                        <li><i class="icon-ok"></i> Support Staff</li>
                        <li><i class="icon-ok"></i> Personal Security</li>
                        <li><i class="icon-ok"></i> VISA Fees &amp; Medical Insurance</li>
                    </ul>

                </div>

            </div>

            <div class="col_one_fourth col_last">

                <h4>Location</h4>

                <section id="event-location" class="gmap" style="height: 300px;"></section>


            </div>

            <div class="clear"></div>

            <div class="col_two_fifth nobottommargin">

                <h4>Gallery</h4>

                <!-- Events Single Gallery Thumbs
                ============================================= -->
                <div class="masonry-thumbs col-4" data-lightbox="gallery">
                    <a href="/images/events/1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
                    <a href="/images/events/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
                    <a href="/images/events/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
                    <a href="/images/events/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
                    <a href="/images/events/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
                    <a href="/images/events/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
                    <a href="/images/events/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
                    <a href="/images/events/8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/images/events/thumbs/8.jpg" alt="Gallery Thumb 8"></a>
                </div><!-- Event Single Gallery Thumbs End -->

            </div>

            <div class="col_three_fifth nobottommargin col_last">

                <h4>Events Timeline</h4>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Timings</th>
                            <th>Location</th>
                            <th>Events</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="label label-danger">10:00 - 12:00</span></td>
                            <td>Main Auditorium</td>
                            <td>WWDC Developer Conference</td>
                        </tr>
                        <tr>
                            <td><span class="label label-danger">12:00 - 12:45</span></td>
                            <td>Cafeteria</td>
                            <td>Lunch</td>
                        </tr>
                        <tr>
                            <td><span class="label label-danger">13:00 - 14:00</span></td>
                            <td>Audio-Visual Lab</td>
                            <td>Apple Engineers Brain-Storming &amp; Questionaire</td>
                        </tr>
                        <tr>
                            <td><span class="label label-danger">15:00 - 18:00</span></td>
                            <td>Room - 25, 2nd Floor</td>
                            <td>Hardware Testing &amp; Evaluation</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- Events Features -->
        <section>
            @include('Events.EventsFeatures')
        </section>
        {{--<!-- Modal -->--}}
        {{--<section>--}}
        {{--@include('Events.UpcomingEvents')--}}
        {{--</section>--}}


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span>SELECT QUANTITY</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form" action="{{url('quantity')}}" method="get">
                            {{--<input type="hidden" name="r_token" value="{!! csrf_token() !!}">--}}

                            <input name="id" type="hidden" value="{{$event->id}}">
                            <div class="form-group">

                                <label for="price">Price</label>
                                <h4>{{$event->eventPrice}}</h4>
                            </div>

                            <div class="form-group">

                                <label for="price">Tickets Remaining</label>
                                <h4 v-model="ticketRemaining " v-if ="quantity >= 0">@{{ticketRemaining - quantity}}</h4>

                            </div>

                            <div class="form-group">
                                <label for="quantity">quantity</label>
                                @if($event->eventPrice > 0)
                                    <select name="quantity" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                @else
                                    <select name="quantity" id="" class="form-control">
                                        <option value="1">1</option>
                                    </select>
                                @endif
                            </div>


                            <button type="submit" class="btn btn-success btn-block"> Proceed To Checkout <span class="glyphicon glyphicon-menu-right"></span></button>
                        </form>
                    </div>

                </div>

            </div>
        </div>



    </div>
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src ="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/vue.min.js"></script>
    <script src="/js/vue-resource.js"></script>
    <script>
        vm = new Vue({
            el: '#event',
            data:{
                quantity: '0',
                event: {!! $event !!},
                ticketRemaining:{!!$event->eventTickets  !!}
                },
            ready: function(){},
            methods: {}
        });
    </script>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}
    {{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
    <script type="text/javascript">

        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });


        jQuery(document).ready( function($){


            var eventStartDate = new Date();
            eventStartDate = new Date(2016, 2, 31);
            $('#event-countdown').countdown({until: eventStartDate});


        });

        jQuery('#event-location').gMap({
            address: 'Ibiza, Spain',
            maptype: 'ROADMAP',
            zoom: 15,
            markers: [
                {
                    address: "Ibiza, Spain"
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });
    </script>
@endsection