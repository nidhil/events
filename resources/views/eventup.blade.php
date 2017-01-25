<form action="{{url('eventup')}}" method="post">
    {!! csrf_field() !!}
    <input type="text" name="eventName',">
    <input type="text" name="eventLocation">
    <input type="time" name="eventStartTime">
    <input type="time" name="eventEndTime">
    <input type="date" name="eventStartDate">
    <input type="date" name="eventEndDate">
    <input type="text" name="eventDescription">
    <input type="text" name="eventCategory',">
    <input type="number" name="eventPrice">
    <input type="number" name="eventTickets">
    <input type="text" name="eventType">
    <button type="submit"> button</button>
</form>