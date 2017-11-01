<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Quicksand:400,700|Raleway:400,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/clockface/css/clockface.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>

    <style>
    body {
      font-family: 'Raleway', sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
      padding-bottom: 100px;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
      padding-bottom: 100px;
  }
  footer { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 30px;
      padding-bottom: 30px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .glyphicon-user {
    font-size:60px;
}
.glyphicon-heart-empty, .glyphicon-dashboard, .glyphicon-thumbs-up{
    font-size:60px;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color:#ffffff;" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="current"><a href="/">Home</a></li>
                        <li><a href="{{ url('check-availability') }}">Check Booking Availability</a></li>
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="/term" style="color:#ffffff;">Book</a></li>
                        <li><a href="/CheckLCD" style="color:#ffffff;">Check LCD</a></li>
                        <li><a href="/rules" style="color:#ffffff;">Rules</a></li>
                        <li class="dropdown" style="color:#ffffff;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/home" style="color:#000000;">Dashboard</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    </div>
<h2 class="text-center" style="color:#ffffff">Enter departure and return date</h2>
<hr>
<!-- BEGIN BOTTOM ABOUT BLOCK -->
<div class="col-md-12" style="color:#ffffff; padding-bottom: 15px;">
  <div class="col-md-4 col-md-offset-4">
  <form method="POST" action="/check" enctype="multipart/form-data">
     {{ csrf_field() }}

    <div class="form-group col-md-12">
        <label for="inputPassword1" class="col-md-12 control-label">Departure Date</label>
        <div class="col-md-12">
            <div class="input-group date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
              <span class="input-group-btn">
                    <button class="btn default" type="button">
                        <i class="fa fa-calendar"></i>
                    </button>
                </span>
                <input type="text" class="form-control" readonly="" name="start_date" value="" required=""  id="s_date">
            </div>
        </div>
    </div>

    <div class="form-group col-md-12">
        <label for="inputPassword1" class="col-md-12 control-label">End Date</label>
        <div class="col-md-12">
            <div class="input-group date date-picker border-grey-navy" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
              <span class="input-group-btn">
                    <button class="btn default" type="button">
                        <i class="fa fa-calendar"></i>
                    </button>
                </span>
                <input type="text" class="form-control" readonly="" name="end_date" value="" required="" id="e_date">
                
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-default text-center">Check</button>
    </div>
    
  </form>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Made by Ezlan + Bootstrap + Laravel</p> 
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
 <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
  <!--[if lt IE 9]>
  <script src="../../assets/global/plugins/respond.min.js"></script>
  <![endif]-->
  <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
  <!-- Core plugins BEGIN (For ALL pages) -->
  <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->
  <!-- BEGIN RevolutionSlider -->
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="../../assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="../../assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> 
  <!-- END RevolutionSlider -->
  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="../../assets/global/plugins/jquery.easing.js"></script>
  <script src="../../assets/global/plugins/jquery.parallax.js"></script>
  <script src="../../assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="../../assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <!-- Core plugins END (required only for current page) -->
  <!-- Global js BEGIN -->
  <script src="../../assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>

<script src="/../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="/../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/../assets/admin/pages/scripts/components-pickers.js"></script>

  <script>
    $(document).ready(function() {
          Metronic.init(); // init metronic core components
          Layout.init(); // init current layout
          QuickSidebar.init(); // init quick sidebar
          Demo.init(); // init demo features
          ComponentsPickers.init();
    });

    $(document).ready(function () {
        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#check-date').offset().top
        }, 'slow');
    });
  </script>
  <!-- Global js END -->
</body>
</html>
