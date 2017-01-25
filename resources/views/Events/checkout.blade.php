{{-- --}}

@extends('master')
@section('Checkout')
<div style="padding-top: 70px;">
    <div class="col-md-9">

        <div class="row">

            <h3>{{$event->eventName}}</h3>
            <h4>{{$event->eventTime}},{{$event->eventDate}}</h4>
            <h4>{{$event->eventLocation}}</h4>

            <br>
            <br>


            <!-- Order Details Table  -->

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Order Summary</div>
                <!-- Table -->
                <table class="table">
                    <tr><th>TYPE</th><th>QUANTITY</th></tr>
                    <tr><td>{{$event->eventType}}</td><td>{{$quantity}}</td></tr>
                </table>
            </div>
            <!-- Order Details Table  Completed-->



            <!-- Registration Details   -->
            @if(!Auth::guest())
                <form action="{{url('/checkout')}}" method="post" class="form-control">
                    {!! csrf_field() !!}
                    <input name="quantity" type="hidden" value="{{$quantity}}">
                    <input name="id" type="hidden" value="{{$event->id}}">
                    <input type="text" name="firstName" value="{{Auth::user()->firstName}}" >
                    <input type="text" name="lastName" value="{{Auth::user()->lastName}}" >
                    <input type="email" name="email" value="{{Auth::user()->email}}">
                    <input type="submit" class="btn btn-primary" value="Complete Registration">

                </form>
            @else
                <form action="{{url('/checkout')}}" method="post" class="form-control">
                    {!! csrf_field() !!}
                    <input name="quantity" type="hidden" value="{{$quantity}}">
                    <input name="id" type="hidden" value="{{$event->id}}">
                    <input type="text" name="firstName" value="firstName">
                    <input type="text" name="lastName" value="lastName" >
                    <input type="email" name="email" value="email">
                    <input type="submit" class="btn btn-primary" value="Complete Registration">

                </form>
            @endif

            <hr>




        </div>
        <!-- Registration Details Completed-->






    </div>

</div>

        <!--  Sidebar -->

        <div class="col-md-3" >




            <!--when and where  block starts -->
                    <div class="panel panel-default" >
                        <!-- Default panel contents -->
                        <div class="panel-heading">When and where</div>

                        <p style="padding:10px;">Silver Oak Hall
                            India Habitat Centre, Lodi Road
                            New Delhi, 110003
                            India</p>
                        <p style="padding:10px;">
                            Monday, March 14, 2016 from 8:30 AM to 6:00 PM (IST)
                        </p>

                        <p style="padding:10px;"><a href="#">Add to my calender</a></p>
                    </div>
            <!--where and when  block ends -->


            <!-- organizer details block starts -->
            <div class="panel panel-default" >
                <!-- Default panel contents -->
                <div class="panel-heading">Organizer</div>

                <p style="padding:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore dolorem, dolores error excepturi ipsum iste itaque laudantium modi
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae eos est explicabo laboriosam laborum molestiae nemo omnis porro possimus praesentium
                    quibusdam, quidem, saepe similique, vel? Accusantium excepturi molestias quia.   molestias mollitia nam, nisi perferendis quibusdam quod quos soluta vero voluptate.</p>
            </div>

            <!-- organizer details block ends -->

        </div>
        <!-- end of  Sidebar -->

    </div>
</div>
@endsection