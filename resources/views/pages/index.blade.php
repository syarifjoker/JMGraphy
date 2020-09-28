<!DOCTYPE html>
<html lang="zxx">

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

    <!-- loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- end loader -->



    <!-- header -->
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
                                        <a style="color:black;"class="dropdown-item" href="{{ route('admin_main') }}">
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
        <div id="home" class="home-intro">
            <div class="container">
                <div class="content">
                    <div class="intro-caption">
                        <h2 style="text-shadow: 2px 2px 4px #000000;">WELCOME TO JM GRAPHY</h2>
                        <p style="text-shadow: 2px 2px 4px #000000;">Freelance photographer into your area for Official or Non-Official Events, Weddings, Pre/Post Convocation and Product and Marketing Shooting. We also serve Graphic Design services for you as well.</p>
                        <button class="button">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home intro -->

    </header>
    <!-- end header -->

    <!-- features -->
    <div id="features" class="features segments">
        <div class="container">
            <div class="section-title">
                <h3>Services</h3>
                <div class="line"></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="content">
                        <i class="fa fa-exchange"></i>
                        <h4>Wedding Ceremony</h4>
                        <p>Capture your best moment with your true love on your biggest day for memories together.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="content">
                        <i class="fa fa-check-circle"></i>
                        <h4>Pre/Post Convocation</h4>
                        <p>Group photo with your friends and family on your graduation day together.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="content no-mb">
                        <i class="fa fa-image"></i>
                        <h4>Product and Marketing shooting</h4>
                        <p>Product to be promoted? Worries no more because we can help you with that.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="content no-mb">
                        <i class="fa fa-gear"></i>
                        <h4>Graphic Design</h4>
                        <p>No time or nobody to find a graphic designer? Well lucky for you we can help with that problems.</p>
                    </div>
                </div>
                <div style="align:center;">
                    <a href="pricing"><button class="button" id="submit" name="submit">
                    <span>Click Here For Pricing</span>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end features -->

    <!-- screenshots -->
    <div id="screenshots" class="screenshots segments">
        <div class="container">
            <div class="section-title">
                <h3>Samples of Our Artwork</h3>
                <div class="line"></div>
            </div>
            <!--<div class="content-image">
                <img src="landing/images/frame-phone.png" alt="">
            </div>-->
            <div class="shots owl-carousel owl-theme">
                <div class="content">
                    <img src="landing/images/shots1.jpg" alt="">
                </div>
                <div class="content">
                    <img src="landing/images/shots2.jpg" alt="">
                </div>
                <div class="content">
                    <img src="landing/images/shots3.jpg" alt="">
                </div>
                <div class="content">
                    <img src="landing/images/shots4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end screenshots -->

    <!-- contact -->
    <div id="contact" class="contact segments">
        <div class="container">
            <div class="section-title">
                <h3>Contact Us</h3>
                <div class="line"></div>
                <p>If you have any questions need us to show, contact us and we will respond as soon as possible</p>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="content-form">
                        <form action="contact-form.php" class="contact-form form-horizontal" id="contact-form" method="post">
                            <div class="content">
                                <div id="name-field">
                                    <input placeholder="Name" type="text" id="form-name" name="form-name" required>
                                </div>
                            </div>
                            <div class="content">
                                <div id="email-field">
                                    <input placeholder="Email" type="email" id="form-email" name="form-email" required>
                                </div>
                            </div>
                            <div class="content">
                                <div id="subject-field">
                                    <input type="text" placeholder="Subject" id="form-subject" name="form-subject" required>
                                </div>
                            </div>
                            <div class="content">
                                <div id="message-field">
                                    <textarea class="form-control" name="form-message" id="form-message" cols="30" rows="7" placeholder="Message" required></textarea>
                                </div>
                                <button class="button" type="submit" id="submit" name="submit">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-subscribe">
                        <h4>Subscribe to Newsletter</h4>
                        <form>
                            <input type="email" placeholder="Email Address">
                            <button class="foot-button">Submit</button>
                        </form>
                    </div>
                    <div class="wrap-social">
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-copyright">
                        <p>Copyright © All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <script src="landing/js/jquery.min.js"></script>
    <script src="landing/js/bootstrap.js"></script>
    <script src="landing/js/lightbox.js"></script>
    <script src="landing/js/jquery.filterizr.js"></script>
    <script src="landing/js/jquery.easytabs.js"></script>
    <script src="landing/js/contact-form.js"></script>
    <script src="landing/js/owl.carousel.js"></script>
    <script src="landing/js/main.js"></script>


    <script>
        // tabs
        $('#tabs').easytabs();
    </script>

</body>

</html>