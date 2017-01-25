
@extends('Dashboard.DashboardMaster')
@section('MyEvents')
    <div style="margin: 0px 19%;">

    <div class="row">
        <h3>MY ALL EVENTS</h3>
        <hr>

        @foreach($events as $event)
            {{--single event block start--}}
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="../images/events/thumbs/1.jpg" alt="...">
                    <div class="caption">
                        <h3>{{$event->eventName}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eum facilis itaque nemo optio perferendis quae quisquam, tenetur voluptates! Adipisci.</p>
                            <button type="button" onclick="location.href='{{url('admin/event/'.$event->id.'/edit')}}';"> Edit </button>
                        <p>
                         <span><form action="{{ url('event/'.$event->id) }}" method="POST">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}

                            <button type="submit" id="delete-task-{{ $event->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Delete
                            </button>
                        </form></span></p>
                    </div>
                </div>
            </div>
            {{--single event block end--}}
        @endforeach





    </div>


    </div>
    @endsection