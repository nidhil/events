<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a  class="navbar-brand" href="">EVENTS DASHBOARD

        </a>
    </div>

    <div class="notifications-wrapper">
        <ul class="nav">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">

                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV TOP  -->


<nav  class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.jpg" class="img-circle" />


                </div>

            </li>
            <li>
                <a  href="#"> <strong>{{ Auth::user()->name}} </strong></a>
            </li>

            <li>
                <a   href="{{url('/admin')}}"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            <li>
                <a href="{{url('admin/events')}}"><i class="fa fa-bolt "></i>My  Events</a>

            </li>

            <li>
                <a href="{{route('event.create')}}"><i class="fa fa-venus "></i>Create Event</a>

            </li>




        </ul>
    </div>

</nav>
<!-- /. SIDEBAR MENU (navbar-side) -->