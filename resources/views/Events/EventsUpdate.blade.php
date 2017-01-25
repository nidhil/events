
{{-- This page is for showing events features for home page --}}
@extends('master')
@section('EventsUpdate')
        <div class="section nobottommargin">
            <div class="container clearfix">

                <div class="heading-block center">
                    <h3>Receive <span>regular</span> Event Updates</h3>
                </div>

                <div class="subscribe-widget">
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group input-group-lg divcenter" style="max-width:600px;">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit">Subscribe Now</button>
                                            </span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
@endsection