<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="/css/calendar.css" type="text/css" />

    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />



    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Home - Events </title>
</head>

<body class="stretched">


<!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header">
            @include('Header.nav')
        </header><!-- #header end -->

                    <!-- Content
                    ============================================= -->
                    <section id="content">

                        <div class="content-wrap">

                            @include('flash')
                            @yield('HomePage')
                            @yield('LoginSignup')
                            @yield('AllEvents')
                            @yield('Checkout')
                            @yield('EventsUpdate')
                            @yield('EventsCalender')
                            @yield('UpcomingEvents')
                            @yield('Testimonials')
                            @yield('EventsDetails')
                            @yield('SearchResult')
                            @yield('CreateEvent')
                            @yield('MyTickets')
                            @yield('MyEvents')
                        </div>

                    </section><!-- #content end -->

        <!-- Footer
                ============================================= -->
        <footer id="footer" class="dark">

            @include('Footer.Footer')
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->


        <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/plugins.js"></script>
        <script type="text/javascript" src="/js/jquery.calendario.js"></script>
        <script type="text/javascript" src="/js/events-data.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
        <script type="text/javascript" src="/js/jquery.gmap.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="/js/functions.js"></script>

        <script type="text/javascript">
            jQuery(document).ready( function($){
                var newDate = new Date(2016, 9, 31);
                $('#countdown-ex1').countdown({until: newDate});
            });

            var cal = $( '#calendar' ).calendario( {
                        onDayClick : function( $el, $contentEl, dateProperties ) {

                            for( var key in dateProperties ) {
                                console.log( key + ' = ' + dateProperties[ key ] );
                            }

                        },
                        caldata : canvasEvents
                    } ),
                    $month = $( '#calendar-month' ).html( cal.getMonthName() ),
                    $year = $( '#calendar-year' ).html( cal.getYear() );

            $( '#calendar-next' ).on( 'click', function() {
                cal.gotoNextMonth( updateMonthYear );
            } );
            $( '#calendar-prev' ).on( 'click', function() {
                cal.gotoPreviousMonth( updateMonthYear );
            } );
            $( '#calendar-current' ).on( 'click', function() {
                cal.gotoNow( updateMonthYear );
            } );

            function updateMonthYear() {
                $month.html( cal.getMonthName() );
                $year.html( cal.getYear() );
            }

            $('#google-map4').gMap({
                address: 'Australia',
                maptype: 'ROADMAP',
                zoom: 3,
                markers: [
                    {
                        address: "Melbourne, Australia",
                        html: "Melbourne, Australia"
                    },
                    {
                        address: "Sydney, Australia",
                        html: "Sydney, Australia"
                    },
                    {
                        address: "Perth, Australia",
                        html: "Perth, Australia"
                    }
                ],
                doubleclickzoom: false,
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }
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
        </div>
</body>

</html>
