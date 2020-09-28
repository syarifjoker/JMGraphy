<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JM Graphy</title>

    <link rel="icon" href="landing/images/favicon.png">
    <link rel="stylesheet" href="landing/css/bootstrap.css">
    <link rel="stylesheet" href="landing/css/line-awesome-font-awesome.css">
    <link rel="stylesheet" href="landing/css/lightbox.css">
    <link rel="stylesheet" href="landing/css/owl.carousel.css">
    <link rel="stylesheet" href="landing/css/owl.theme.default.css">
    <link rel="stylesheet" href="landing/css/animate.css">
    <link rel="stylesheet" href="landing/css/style.css">
    <link rel="stylesheet" href="landing/css/responsive.css">
</head>
<body>
<!---Header Start--->
<header>

<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-ng">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only"></span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">JM GRAPHY</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-navbar">
            <ul id="nav" class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="#features">Services</a>
                </li>
                <li>
                    <a href="#screenshots">Samples</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <ul style="list-style-type: none;">
                            <li>
                                <a style="color:black;"class="dropdown-item" href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a style="color:black;"class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->
<!-- home intro -->
        <div id="home" class="price-intro">
            <div class="container">
                <div class="content">
                    <div class="intro-caption">
                        <h2 style="text-shadow: 2px 2px 4px #000000;">PACKAGE and PRICING</h2>
                    </div>
                </div>
            </div>
        </div>
<!-- end home intro -->
</header>
<!---Header end--->
  
  <!---services End --->
  <section style="background-color: #EF3E36">
    <div class="featured">
      <img src="..\WEB DESIGN\Assets\img\hero-texture.png" style="height: 150px">
      <div class="container" style="color:white">
      <div class="title text-center">
        <h1 class="title-black"> Our Services </h1>
      </div>
      <div class="row">
          <div class="col-sm-6 col-lg-4">
              <h5 class="text-center">Wedding Photo/Video graphy</h5>
              <p>Capture your beutiful moment with your true love with our services. We serve photography and videography services to capture your beautiful moments together.</p>
          </div>
          <div class="col-sm-6 col-lg-4">
              <h5 class="text-center">Pre/Post Convocation Outdoor Photography</h5>
              <p>Frame your best memories together with you friends and family on your Graduation Day! Group photo can be up to 6 person per group.</p>
          </div>
          <div class="col-sm-6 col-lg-4">
              <h5 class="text-center">Event Photo/Video graphy</h5>
              <p>Any event such as Birthday Party, Corporate Event, and Festival also one of our services that can we can give to you!</p>
          </div>
          <div class="col-sm-6 col-lg-4">
          </div>
          <div class="col-sm-6 col-lg-4">
              <h5 class="text-center">Graphic Design</h5>
              <p>Need a designer for a Logo, Poster, Banner and Bunting, or Material Content? We can provide graphic design services to you!</p>
          </div>
          <div class="col-sm-6 col-lg-4">
          </div>
      </div>
    </div>
  </div>
  </section>
  <!---services End --->
  </body>
  <footer>
    <div style="background-color: #011936;">
      <p style="color:white;">&copy; 2020 All Rights Reserved. Design by JMGraphy</p>
    </div>
  </footer>
</html>
