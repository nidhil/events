<!-- CREATE AN EVENT FORM
            ============================================= -->
@extends('master')
    @section('CreateEvent')

<div class="container clearfix">

            <!-- Postcontent
            ============================================= -->
            <div class="postcontent nobottommargin">

                <h3>Create A New Event</h3>

                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{url('event')}}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Event Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Event Category <small>*</small></label>
                            <select id="template-contactform-service" name="" class="sm-form-control">
                                <option value="">-- Select One --</option>
                                <option value="music">Music</option>
                                <option value="food">Food and Drinks</option>
                                <option value="party">Party</option>
                                <option value="sports">Sports</option>
                                <option value="technology">Technology</option>
                                <option value="business">Business</option>
                            </select>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Event Location</label>
                            <input type="text" id="template-contactform-phone" name="" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-subject">START Date<small>*</small></label>
                            <input type="date" id="template-contactform-subject" name="" value="" class="required sm-form-control" />
                        </div>
                        <div class="col_one_third">
                            <label for="template-contactform-phone">Start Time</label>
                            <input type="text" id="template-contactform-phone" name="" value="" class="sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Price in Rs.</label>
                            <input type="text" id="template-contactform-phone" name="" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_half">
                            <label for="template-contactform-subject">End Date<small>*</small></label>
                            <input type="date" id="template-contactform-subject" name="" value="" class="required sm-form-control" />
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-phone">End Time</label>
                            <input type="text" id="template-contactform-phone" name="" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>
                        <div class="col_half">
                            <label for="template-contactform-message">Event Image <small>*</small></label>
                            <input class="required sm-form-control" id="template-contactform-message" name="" type="file" >
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-phone">Total Tickets</label>
                            <input type="number" id="template-contactform-phone" name="" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="template-contactform-message">Description <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Create an Event</button>
                        </div>

                    </form>
                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar col_last nobottommargin">

                <h4>Keep in Mind</h4>
                <h5>Here are some expert tips for setting up your event details:</h5>

                <li>Make sure your event's timezone is correct.</li>
                <li>Add FAQs to outline event logistics (refund policy, parking, dress code, etc.)</li>
                <li>Add color to your event description with video or photos.</li>
                <li>Spruce up your organizer profile page to promote your events.</li>
                <li>Learn about setting up repeating events with ease.</li>
                <p>Need more help? Check out our Help Center for more information.</p>

            </div><!-- .sidebar end -->

        </div>
    @endsection