<div id="header-wrap">

    <div class="container clearfix">

        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="{{url('/')}}" class="standard-logo" data-dark-logo="/images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
            <a href="{{url('/')}}" class="retina-logo" data-dark-logo="/images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
        </div><!-- #logo end -->

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu">


            <ul>
                <li><a href="{{url('/')}}"><div>Home</div></a></li>
                <li><a href="{{url('event')}}"><div>All Events</div></a></li>
                <li ><a href="#"><div>About Us</div></a></li>
                <li ><a href="#"><div>Contact Us</div></a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->firstName }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-btn fa-sign-out"></i>Settings</a></li>
                            <li><a href="{{ url('user/'.Auth::user()->id.'/myorder') }}"><i class="fa fa-btn fa-sign-out"></i>My Tickets</a></li>
                            <li><a href="{{ url('user/'.Auth::user()->id.'/myevents') }}"><i class="fa fa-btn fa-sign-out"></i>My Events</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif

            </ul>



            <!-- Top Search
            ============================================= -->
            <div id="top-search">
                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                <form action="{{url('search')}}" method="get">
                    <input type="text" name="event" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                </form>
            </div><!-- #top-search end -->

        </nav><!-- #primary-menu end -->

    </div>

</div>