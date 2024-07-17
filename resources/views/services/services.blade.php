@extends('master', ['header2' => true]) @section('title', 'Service') @section('content')

<!-- Start Header Top 
    ============================================= -->
<div class="top-bar-area inc-pad bg-theme text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6 info">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> 48 A , shumail complex karachi, Pakistan
                    </li>
                    <li>
                        <i class="fas fa-envelope-open"></i> info@codiantech.com
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 text-right item-flex">
                <div class="info">
                    <ul>
                        <li>
                            <i class="fas fa-clock"></i> Office Hours: 8:00 AM – 8:00 PM PM
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->


<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default active-border navbar-sticky bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav inc-border">
                <ul>
                    <li class="contact">
                        <i class="flaticon-telephone"></i>
                        <p>Call us today! <strong>+92 335 2150938</strong></p>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                @include('inc.header_ul')

            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light"
    style="background-image: url( {{ asset('assets/img/abstract-5035778_1920.jpg') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Our Services</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services 
    ============================================= -->
<div class="service-area default-padding bottom-less bg-cover">
    <div class="container">
        <div class="service-items text-center">
            <div class="row text-capitalize">
                <!-- Single item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>DevOps</h4>
                            <i class="flaticon-cogwheel"></i>
                            <p>
                                Streamline Your Development Process with Codiantech's DevOps Services
                            </p>
                            <a class="btn-standard" href="/services/DevOps">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                <!-- Single item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Cyber Security</h4>
                            <i class="flaticon-analysis-1"></i>
                            <p>
                                Safeguard Your Digital Assets with Codiantech's Cybersecurity Solutions
                            </p>
                            <a class="btn-standard" href="/services/cyber-security">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                <!-- Single item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>UI/UX /Graphic Designing</h4>
                            <i class="flaticon-reduction"></i>
                            <p>
                                Elevate Your Brand with Codiantech's Premier Graphic Design and UI/UX Services
                            </p>
                            <a class="btn-standard" href="/services/UI-UX">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                <!-- Single item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Video editing and animation </h4>
                            <i class="flaticon-interview"></i>
                            <p>
                                Bring Your Vision to Life with Codiantech's Premier Video Editing and Animation Services
                            </p>
                            <a class="btn-standard" href="/services/video-editing">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                <!-- Single item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Web development and custom software</h4>
                            <i class="flaticon-sketch"></i>
                            <p>
                                Empower Your Online Presence with Codiantech's CMS Web Development and Custom Software
                                Solutions
                            </p>
                            <a class="btn-standard" href="/services/web-development">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>Mobile App</h4>
                            <i class="flaticon-sketch"></i>
                            <p>
                                Elevate Your Business with Codiantech's Comprehensive Mobile App Development Services
                            </p>
                            <a class="btn-standard" href="/services/mobile-app">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                <!-- Single item -->

                <!-- End Single item -->
            </div>
        </div>
    </div>
</div>
<!-- End Services Area -->

<!-- Start Video Area 
    ============================================= -->
<div class="video-area extra-padding text-center default-padding faq-area bg-gray bg-fixed shadow dark text-light"
    style="background-image: url( {{ asset('assets/img/2440x1578.png') }} );">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5>Why Choose Us</h5>
                    <h2>We Provide Outsourced IT Services <br> For your business</h2>
                    <!-- <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                            <i class="fa fa-play"></i>
                        </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fixed Shpae Bottom -->
    <div class="fixed-shape-bottom">
        <img src="assets/img/shape/9.png" alt="Shape">
    </div>
    <!-- Fixed Shpae Bottom -->
</div>
<!-- End Video Area -->

<!-- Start Why Choose Us 
    ============================================= -->
<div class="choose-us-area default-padding-bottom">
    <div class="container">
        <div class="items-box">
            <div class="row">
                <!-- SIngle item-->
                <div class="single-item col-lg-6 col-md-6">
                    <div class="item">
                        <div class="info">
                            <h4>24/7 Customer support</h4>
                            <p>
                                we believe in going the extra mile to ensure our clients' success. That's why we provide
                                24/7 support, because we understand that your business needs don't stop when the clock
                                strikes five.
                            </p>
                            <div class="call">
                                <div class="icons">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Helpline</span> +92 335 2150938
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End SIngle item-->
                <!-- SIngle item-->
                <div class="single-item col-lg-6 col-md-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <div class="info">
                            <h4>Smart solutions</h4>
                            <p>
                                We Knows, what is your Need!
                                Codiantech offers intelligent IT solutions as a leading provider in the industry
                            </p>
                            <a href="#" class="btn-more">Start Now</a>
                        </div>
                    </div>
                </div>
                <!-- End SIngle item-->
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Area -->

<!-- Start Clients 
    ============================================= -->
<div class="clients-area default-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <a href="#"><img src="{{ url('assets/img/MCIT.jpg') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/NCBE.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/SIDF.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/KACST.jpg') }}" alt="Client"></a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients Area -->


@endsection