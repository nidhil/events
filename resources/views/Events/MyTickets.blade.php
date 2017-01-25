{{-- This  page is for showing all tickets booked  by user --}}
@extends('master')
@section('MyTickets')
    <div style="margin:0 10%;">
        <h1>MY Order Summary</h1>

        @foreach($orders as $key=>$order)
            <div class="promo promo-dark promo-uppercase bottommargin">
            <h3>{{$order->eventName}}</h3>
            <span><i class="icon-calendar3"></i> {{$order->created_at->format('M j,Y')}}</span>
            <span> Order Id: {{$order->orderId}}</span>
            <span>Quantity: {{$order->quantity}}</span>
            <span>Amount Paid: Rs. {{$order->totalAmount}}</span>
            <div>
                <a href="#" class="button button-large button-rounded">Print Ticket</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection