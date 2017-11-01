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
.containerBox {
    position: relative;
    display: inline-block;
}
.text-box {
    position: absolute;    
    height: 100%;
    text-align: center;    
    width: 100%;
}
.text-box:before {
   content: '';
   display: inline-block;
   height: 100%;
   vertical-align: middle;
}
h4 {
   display: inline-block;
   font-size: 80px; /*or whatever you want*/
   color: #FFF;   
}
img {
  display: block;
  max-width: 100%;
  height: auto;
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

<div class="containerBox">
    <div class="text-box">
        <h4>Kuis Transportation Booking System</h4>
    </div>
    <img class="img-responsive" src="image/head2.jpg">
</div>

<footer class="container-fluid text-center">
  <p>Made by Ezlan + Bootstrap + Laravel</p> 
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
