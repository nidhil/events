@extends('Dashboard.DashboardMaster')
@section('CreateEvent')
<div style="margin: 36px 34%;">

    <h3>Create a new event</h3>
    <form action="{{url('event')}}" method="post">
        {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('eventName') ? ' has-error' : '' }}">
            <label for="">Event name</label>
            <input type="text" id="eventName" name="eventName" value="{{old('eventName')}}" class="form-control " />
                @if ($errors->has('eventName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('eventName') }}</strong>
                                    </span>
                @endif
        </div>
        <div class="form-group{{ $errors->has('eventCategory') ? ' has-error' : '' }}">

        <label for="eventCategory">Event Category</label>
            <select  name="eventCategory" class="form-control">
                <option value="">-- Select One --</option>
                <option value="music">Music</option>
                <option value="food">Food and Drinks</option>
                <option value="party">Party</option>
                <option value="sports">Sports</option>
                <option value="technology">Technology</option>
                <option value="business">Business</option>
            </select>
            @if ($errors->has('eventCategory'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventCategory') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-group{{ $errors->has('eventLocation') ? ' has-error' : '' }}">
            <label for="eventLocation">Event Location</label>
            <input type="text" id="eventLocation" name="eventLocation" value="{{old('eventLocation')}}" class="form-control" />
            @if ($errors->has('eventLocation'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventLocation') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('eventStartDate') ? ' has-error' : '' }}">
            <label for="eventStartDate">START Date<small>*</small></label>
            <input type="date" id="eventStartDate" name="eventStartDate" value="{{old('eventStartDate')}}" class="form-control" />
            @if ($errors->has('eventStartDate'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventStartDate') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('eventStartTime') ? ' has-error' : '' }}">
            <label for="eventStartTime">Start Time</label>
            <input type="time" id="eventStartTime" name="eventStartTime" value="{{old('eventStartTime')}}" class="form-control" />
            @if ($errors->has('eventStartTime'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventStartTime') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('eventPrice') ? ' has-error' : '' }}">
            <label for="eventPrice">Price in Rs.</label>
            <input type="number" id="eventPrice" name="eventPrice" value="{{old('eventPrice')}}" class="form-control" />
            @if ($errors->has('eventPrice'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventPrice') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('eventEndDate') ? ' has-error' : '' }}">
            <label for="eventEndDate">End Date<small>*</small></label>
            <input type="date" id="eventEndDate" name="eventEndDate" value="{{old('eventEndDate')}}" class="form-control" />
            @if ($errors->has('eventEndDate'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventEndDate') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('eventEndTime') ? ' has-error' : '' }}">
            <label for="eventEndTime">End Time</label>
            <input type="time" id="eventEndTime" name="eventEndTime" value="{{old('eventEndTime')}}" class="form-control" />
            @if ($errors->has('eventEndTime'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventEndTime') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('eventType') ? ' has-error' : '' }}">

            <label for="eventType">Event Type</label>
            <select  name="eventType" class="form-control">S
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
            @if ($errors->has('eventType'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventType') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('eventTickets') ? ' has-error' : '' }}">
            <label for="eventTickets">Total Tickets</label>
            <input type="number" id="eventTickets" name="eventTickets" value="{{old('eventTickets')}}" class="form-control" />
            @if ($errors->has('eventTickets'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventTickets') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('eventDescription') ? ' has-error' : '' }}">
            <label for="eventDescription">Description <small>*</small></label>
            <textarea class="required form-control" id="eventDescription" name="eventDescription" rows="6" cols="30" value="{{old('eventDescription')}}" ></textarea>
            @if ($errors->has('eventDescription'))
                <span class="help-block">
                                        <strong>{{ $errors->first('eventDescription') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-group">
            <button class="button button-3d nomargin" type="submit">Create an Event</button>

        </div>

    </form>
</div>
@endsection