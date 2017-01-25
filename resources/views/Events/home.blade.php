{{-- This page is home page for searching events --}}
@extends('master')
@section('HomePage')
    <style>
        .content-wrap{
            padding-top: 0px;
        }
        #slider  input[type="text"],select{
            width: 30%;
            height: 47px;
            padding: 0px 10px;
        }

        #slider .searchbtn{
            height: 47px;
            margin-left: 4px;
        }
        form{
            margin:0 auto;
        }
    </style>
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>

    <script>


        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initMap() {

            var input = /** @type {!HTMLInputElement} */(
                    document.getElementById('pac-input'));



            var autocomplete = new google.maps.places.Autocomplete(input);


            var infowindow = new google.maps.InfoWindow();


            autocomplete.addListener('place_changed', function() {
                infowindow.close();

                var place = autocomplete.getPlace();
                //alert(place.geometry.location.lat());
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {


                }


                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || '')

                        // (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);

            });

            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.

        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0BxdinF1uYtDh2y5_phWv5o6dwkRSssI&libraries=places&callback=initMap" async defer></script>

    <section id="slider"  style="background: url('/images/parallax/calendar.jpg') no-repeat; background-size: cover" data-height-lg="600" data-height-md="500" data-height-sm="400" data-height-xs="300" data-height-xxs="250">
        <form action="{{url('search')}}" style="margin: 18% 19%;">
            <h2 style="text-align: center; color: #569;">Search For your Favourite Events</h2>

            <select name="category">
                <option>All Events </option>
                <option>Party </option>
                <option>Business </option>
                <option>Sports </option>
                <option>Food and Drinks </option>
                <option>Technology </option>
            </select>

            <!--    <input type="text" placeholder="Search for Events or Categories" name="event"> -->
            <input type="text" placeholder="Enter Desigred Location"  id="pac-input"  name="location">
            <input type="button" value="My Location" class="searchbtn">
            <input type="submit" value="SEARCH" class="searchbtn">
            <h2 style="text-align: center; margin-top: 100px; color: #fff;">OR Choose From Categories Below</h2>


        </form>

    </section>

    <div class="col_full bottommargin-lg common-height">

        <div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">MUSIC</h3>
                <p style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>
                <a href="{{url('event/category/music')}}" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin"><i class="icon-angle-right"></i><span>VIEW ALL EVENTS</span></a>
                <i class="icon-music   bgicon"></i>
            </div>
        </div>

        <div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">FOOD AND DRINKS</h3>
                <p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>
                <a href="{{url('event/category/food')}}" class="button button-border button-light button-rounded uppercase nomargin">VIEW ALL EVENTS</a>
                <i class="icon-glass bgicon"></i>
            </div>
        </div>

        <div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">PARTY</h3>
                <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                <a href="{{url('event/category/party')}}" class="button button-border button-light button-rounded uppercase nomargin">VIEW ALL EVENTS</a>
                <i class="icon-beer bgicon"></i>
            </div>
        </div>
        <div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">SPORTS</h3>
                <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                <a href="{{url('event/category/sports')}}" class="button button-border button-light button-rounded uppercase nomargin">VIEW ALL EVENTS</a>
                <i class="icon-gamepad bgicon"></i>
            </div>
        </div>
        <div class="col-md-4 dark col-padding ohidden" style="background-color: #457;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">TECHNOLOGY</h3>
                <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                <a href="{{url('event/category/technology')}}" class="button button-border button-light button-rounded uppercase nomargin">VIEW ALL EVENTS</a>
                <i class="icon-code bgicon"></i>
            </div>
        </div>
        <div class="col-md-4 dark col-padding ohidden" style="background-color: #f38747;">
            <div>
                <h3 class="uppercase" style="font-weight: 600;">BUSINESS</h3>
                <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                <a href="{{url('event/category/business')}}" class="button button-border button-light button-rounded uppercase nomargin">VIEW ALL EVENTS</a>
                <i class="icon-cogs bgicon"></i>


            </div>
        </div>

        <div class="clear"></div>

    </div>





@endsection