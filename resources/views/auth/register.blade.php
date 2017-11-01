

register



<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8"/>
  <title>Ahda</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta content="" name="description"/>
  <meta content="" name="author"/>
  <!-- Alertrify -->
  <script src="../assets/alertrify/js/alertify.min.js"></script>
  <!-- include the style -->
  <link rel="stylesheet" href="../assets/alertrify/css/alertify.min.css" />
  <!-- include a theme -->
  <link rel="stylesheet" href="../assets/alertrify/css/themes/default.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Oxygen|Quicksand:400,700|Raleway:400,700" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
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
        <li class="current"><a href="{{ url('homepage') }}" >Home</a></li>
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
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
  <!-- BEGIN REGISTRATION FORM -->
  <div class="container-fluid bg-2">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Register an account</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <p class="hint" style="font-size: medium; color: #000000;">
               Fill up your information
             </p>
             <div class="form-group">
              <label for="email" class="col-md-4 control-label" style="color:#000000;">Name</label>
              <div class="col-md-6">
                <input class="form-control " type="text" placeholder="Fullname" name="name" value="{{ old('name') }}" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-md-4 control-label" style="color:#000000;">E-mail</label>
              <div class="col-md-6">
                <input class="form-control " type="text" autocomplete="off" placeholder="E-mail Address" name="email" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-md-4 control-label" style="color:#000000;">Faculty</label>
              <div class="col-md-6">
                <select class="form-control" name="faculty" required>
                  <option value="" disabled selected>Faculty</option>
                  <option value="FSTM">FSTM</option>
                  <option value="FPM">FPM</option>
                  <option value="FP">FP</option>
                  <option value="FSU">FSU</option>
                  <option value="PA">PA</option>
                  <option value="FPPI">FPPI</option>
                  <option value="PPT">PPT</option>
                  <option value="PPS">PPS</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-md-4 control-label" style="color:#000000;">Phone No</label>
              <div class="col-md-6">
                <input class="form-control " type="text" autocomplete="off" placeholder="Phone No." name="phone" value="{{ old('phone') }}" required/>
              </div>
            </div>

            <p class="hint" style="font-size: medium; padding-top: 30px; color: #000000;">
             Fill up login information
           </p>

           <div class="form-group">
            <label for="email" class="col-md-4 control-label" style="color:#000000;">Staff/Matrics No.</label>
            <div class="col-md-6">
              <input class="form-control " type="text" autocomplete="off" placeholder="Staff/Matrics No." name="matrik" value="{{ old('matrik') }}" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-md-4 control-label" style="color:#000000;">Password</label>
            <div class="col-md-6">
              <input class="form-control " type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required/>
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 45px;">
            <label for="email" class="col-md-4 control-label" style="color:#000000;">Password Conformation</label>
            <div class="col-md-6">
              <input class="form-control " type="password" autocomplete="off" placeholder="Password Confirmation" name="password_confirmation"/>
            </div>
          </div>

          <div class="form-actions padding-top-50px text-center" style="background: transparent;">
            <button type="submit" id="register-submit-btn" class="btn btn-primary" style="min-width: 120px">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>
<div class="copyright">

</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
  jQuery(document).ready(function() {     
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    Login.init();
    Demo.init();
  });
</script>

@include('errors.validation-errors')
@include('errors.validation-errors-script')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>