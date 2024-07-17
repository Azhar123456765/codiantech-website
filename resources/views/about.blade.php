@extends('master', ['header2' => true]) @section('title', 'About Us') @section('content')

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
                    <img src="{{ url('storage/' . setting('site.logo')) }}" class="logo" alt="Logo">
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
    style="background-image: url({{ asset('storage/' . str_replace('\\', '/', $page->img_1)) }});">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>{{$page->heading_1}}</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Breadcrumb -->


<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 content">
{{-- 
                <h2>Introduction:
                </h2>
                <p>
                    Since its inception in 2017, Codiantech has been at the forefront of providing exceptional software
                    development services, mobile app solutions, top-notch UI/UX designs, reliable bookkeeping software,
                    and captivating graphics and video animations. With a commitment to innovation, quality, and
                    customer satisfaction, Codiantech stands tall as a leading software company trusted by businesses
                    worldwide.

                </p>
                <h3>Why Choose Codiantech?
                </h3>
                <p>
                    Expertise in Software Development: Codiantech boasts a team of seasoned professionals proficient in
                    a myriad of programming languages and frameworks. Whether it's web applications, enterprise
                    software, or custom solutions, we have the expertise to turn your ideas into reality.

                    Cutting-Edge Mobile App Solutions: In today's mobile-centric world, having a robust mobile app is
                    imperative for business success. Codiantech crafts bespoke mobile applications for iOS and Android
                    platforms that are not only visually stunning but also highly functional and user-friendly.

                    Impeccable UI/UX Designs: A seamless user experience can make or break a product. At Codiantech, we
                    understand the importance of intuitive design. Our UI/UX experts meticulously craft interfaces that
                    captivate users and enhance engagement, ensuring maximum satisfaction.

                    Efficient Bookkeeping Solutions: Keeping track of finances is essential for any business. Codiantech
                    offers efficient bookkeeping software tailored to meet your specific needs. From invoicing and
                    expense tracking to financial reporting, our solutions streamline your accounting processes, saving
                    you time and resources.

                    Captivating Graphics and Video Animation: In the digital age, visual content reigns supreme.
                    Codiantech's talented graphic designers and animators breathe life into your ideas with stunning
                    visuals and captivating animations that leave a lasting impression on your audience.
                </p>
                <h3>Why SEO-based Content Matters?</h3>
                <p>
                    In today's competitive digital landscape, having a strong online presence is crucial for business
                    success. SEO-based content ensures that your website ranks high on search engine results pages
                    (SERPs), making it easier for potential clients to find you. By incorporating relevant keywords and
                    optimizing content structure, Codiantech can help boost your visibility and attract organic traffic
                    to your website.
                </p> --}}

                {!! $page->para_1 !!}
                <div class="row thumbs">
                    <div class="col-lg-12 col-md-6 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $page->img_2)) }}" alt="Thumb" height="400px" width="400px">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/img/contact-us-2993109_1280.jpg') }}" alt="Thumb" height="300">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Star About Area
    ============================================= -->
<!-- <div class="about-area faq-area inc-shape default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="assets/img/800x600.png" alt="Thumb">
                    <img src="assets/img/800x600.png" alt="Thumb">
                    <div class="overlay">
                        <div class="content">
                            <h4>20 years of experience</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 info">
                <h2>We specialize in expert-level integration services</h2>
                <p>
                    We provide a comprehensive range of integration services tailored to diverse industries, including
                    banking, security, IoT, payment gateways, and more.
                </p>
                <div class="faq-content accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Do I need a business plan?
                            </h4>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Continue building numerous of at relation in margaret. Lasted engage roused mother
                                    an am at. Other early while if by do to. Missed living excuse as be.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                How long should a business plan be?
                            </h4>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Continue building numerous of at relation in margaret. Lasted engage roused mother
                                    an am at. Other early while if by do to. Missed living excuse as be.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Where do I start?
                            </h4>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Continue building numerous of at relation in margaret. Lasted engage roused mother
                                    an am at. Other early while if by do to. Missed living excuse as be.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->
<!-- End About Area -->

<!-- Start Works About
    ============================================= -->
<!-- <div class="works-about-area overflow-hidden">
    <div class="container">
        <div class="works-about-items default-padding">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <h5>Works About</h5>
                    <p>
                        we don't just build software solutions; we craft experiences that drive success. With a proud
                        legacy of excellence, we are thrilled to announce that we've earned the trust of over 5,000
                        satisfied customers and counting.
                    </p>
                    <ul>
                        <li>
                            <h5>100% Client Satisfaction</h5>
                        </li>
                        <li>
                            <h5>World Class Worker</h5>
                        </li>
                    </ul>
                    <a class="btn btn-theme effect btn-sm">Talk to a consultant</a>
                </div>
                <div class="col-lg-6">
                    <div class="thumb">
                    <img src="assets/img/WhatsApp Image 2024-05-12 at 3.44.21 PM.jpeg" class="object-fit-cover"
                            alt="Thumb" width="800px" height="500px">
                        <div class="fun-fact">
                            <div class="timer" data-to="100" data-speed="5000"></div>
                            <span class="medium">Completed Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Works About Area -->
<!-- Start Work Process
    ============================================= -->
<div class="work-process-area overflow-hidden default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Process</h4>
                    <h2>How we works</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="work-pro-items">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="item-inner">
                            <div class="icon">
                                <i class="flaticon-select"></i>
                                <span>01</span>
                            </div>
                            <h5>Choose a Service</h5>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="item-inner">
                            <div class="icon">
                                <i class="flaticon-video-call"></i>
                                <span>02</span>
                            </div>
                            <h5>Request a Meeting</h5>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="item-inner">
                            <div class="icon">
                                <i class="flaticon-strategy"></i>
                                <span>03</span>
                            </div>
                            <h5>Receive Custom Plan</h5>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="item-inner">
                            <div class="icon">
                                <i class="flaticon-help"></i>
                                <span>04</span>
                            </div>
                            <h5>Let’s Make it Happen</h5>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Work Process Area -->

<!-- Start Video Area
    ============================================= -->
<div class="video-area extra-padding text-center default-padding faq-area bg-gray bg-fixed shadow dark text-light"
    style="background-image: url({{ asset('storage/' . str_replace('\\', '/', $page->img_3)) }});">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5>Why Choose Us</h5>
                    <h2>We Provide Outsourced IT Services <br> For your business</h2>
                    <!-- <a class="popup-youtube relative video-play-button"
                        href="https://www.youtube.com/watch?v=owhuBrGIOsE">
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
                <div class="single-item col-lg-6 col-mg-6">
                    <div class="item">
                        <div class="info">
                            <h4>{!! $page->heading_2 !!}</h4>
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
                <div class="single-item col-lg-6 col-mg-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <div class="info">
                            <h4>{!! $page->heading_3!!}</h4>
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


<!-- Start Team
    ============================================= -->
{{-- <div class="team-area default-padding-bottom bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Expert Team</h4>
                    <h2>Meet Our Leadership</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="team-items text-center">
            <div class="row">
                <!-- Sngle Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/businessman-296833_1280.png" width="350" height="350" alt="Thumb">
                            <div class="social">
                                <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                <label for="toggle" class="share-button">
                                    <i class="fas fa-plus"></i>
                                </label>
                                <a href="#" class="share-icon facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="share-icon twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="share-icon instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Sporia Deko</h4>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- End Sngle Item -->
                <!-- Sngle Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/businessman-296833_1280.png" width="350" height="350" alt="Thumb">
                            <div class="social">
                                <input type="checkbox" id="toggle-2" class="share-toggle" hidden>
                                <label for="toggle-2" class="share-button">
                                    <i class="fas fa-plus"></i>
                                </label>
                                <a href="#" class="share-icon facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="share-icon twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="share-icon instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Adhom Jonam</h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <!-- End Sngle Item -->
                <!-- Sngle Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/leadership1.jpeg" alt="Thumb" width="350" height="350">
                            <div class="social">
                                <input type="checkbox" id="toggle-3" class="share-toggle" hidden>
                                <label for="toggle-3" class="share-button">
                                    <i class="fas fa-plus"></i>
                                </label>
                                <a href="#" class="share-icon facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="share-icon twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="share-icon instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Turka Pruda</h4>
                            <span>CEO, Co-Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Sngle Item -->
            </div>
        </div>
    </div>
</div> --}}
<!-- End Team Area -->

@endsection
