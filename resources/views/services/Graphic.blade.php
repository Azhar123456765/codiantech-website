@extends('master', ['header2' => true]) @section('title', 'UI/UX /Graphic Designing ') @section('content')

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
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url( {{ asset('assets/img/UIUX.jpeg') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>UI/UX /Graphic Designing </h2>
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

<!-- Start Services Details 
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 content">
                <div class="thumb">
                    <img src="{{ asset('assets/img/images/328410-PA7RGC-402 (1).webp') }}" class="cus-img" alt="Thumb">
                </div>
                <h2>Elevate Your Brand with Codiantech's Premier Graphic Design and UI/UX Services</h2>
                <p>
                    In the digital age, captivating visuals and seamless user experiences are paramount to the success
                    of any business. Codiantech, a trusted leader in software solutions since 2017, offers expert
                    graphic design and UI/UX services tailored to help businesses stand out in a crowded marketplace.
                    With a focus on creativity, innovation, and user-centric design, Codiantech empowers clients to
                    enhance their brand identity, engage their audience, and drive meaningful interactions across
                    digital platforms.
                <h3>Key Features of Codiantech's Graphic Design and UI/UX Services:</h3>
                <p>
                    Strategic Branding and Identity Design: Codiantech helps clients establish a distinctive brand
                    identity through strategic logo design, brand collateral creation, and visual branding elements. Our
                    experienced graphic designers craft visually appealing assets that resonate with your target
                    audience and convey your brand's values and personality effectively.

                    User-Centric UI/UX Design: Codiantech prioritizes user experience at every stage of the design
                    process. Our UI/UX experts conduct thorough research, user testing, and prototyping to create
                    intuitive, user-friendly interfaces that delight and engage users. By focusing on usability,
                    accessibility, and aesthetics, we ensure that every interaction with your digital products leaves a
                    lasting impression.

                    Website Design and Development: Codiantech specializes in designing and developing stunning websites
                    that not only look great but also deliver exceptional user experiences. Whether it's a corporate
                    website, e-commerce platform, or web application, our team combines creative design with robust
                    functionality to create websites that drive conversions and achieve business objectives.

                    Mobile App Design: In today's mobile-centric world, having a well-designed mobile app is essential
                    for reaching and engaging customers on the go. Codiantech designs intuitive, visually appealing
                    mobile interfaces that enhance user engagement and streamline interactions, resulting in higher user
                    satisfaction and retention rates.

                    Graphic Illustrations and Animations: Codiantech's talented graphic designers create captivating
                    illustrations and animations that bring your brand story to life. From custom illustrations and
                    iconography to animated explainer videos and motion graphics, we help you communicate complex ideas
                    and captivate your audience in a visually compelling manner.
                </p>
                <h3>Conclusion:</h3>
                <p>
                    With Codiantech's graphic design and UI/UX services, businesses can elevate their brand presence,
                    enhance user experiences, and drive meaningful connections with their audience. Whether you're
                    looking to revamp your brand identity, design a user-friendly website, or create engaging mobile app
                    interfaces, Codiantech has the expertise and creativity to bring your vision to life. Partner with
                    Codiantech and unlock the power of exceptional design to achieve your business goals and surpass
                    your competitors. </p>
                {{--                {{-- <div class="row thumbs">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                    </div>
                </div> --}} --}}
            </div>
            <div class="col-lg-4 sidebar">
                <div class="sidebar-item link">
                    <li><a class="active" href="/services/UI-UX">UI/UX /Graphic Designing</a></li>
                    <li><a  href="/services/DevOps">DevOps</a></li>
                    <li><a href="/services/cyber-security">Cyber Security</a></li>
                    <li><a href="/services/video-editing">Video editing and animation</a></li>
                    <li><a href="/services/web-development">Web development and custom software
                        </a></li>
                    <li><a href="/services/mobile-app">Mobile App
                        </a></li>
                    </ul>
                </div>
                <div class="sidebar-item banner">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/images/2900473_25489 (1).webp') }}" alt="Thumb">
                        <div class="content">
                            <h5>Have Additional Questions?</h5>
                            <h3><i class="fas fa-phone"></i> +92 335 2150938</h3>
                        </div>
                    </div>
                </div>
                <div class="sidebar-item brochure">
                    <div class="title">
                        <h4>Brochure</h4>
                    </div>
                    <p>
                        
                    </p>
                    <a href="/down-service"><i class="fas fa-file-pdf"></i> Download Service</a>
                    <a href="/down-features"><i class="fas fa-file-archive"></i> Download Features</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details -->

<!-- Start Clients 
    ============================================= -->
{{-- {{-- <div class="clients-area default-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                    <a href="#"><img src="{{ url('assets/img/150x80.png') }}" alt="Client"></a>
                </div>
            </div>
        </div>
    </div>
</div> --}} --}}
<!-- End Clients Area -->

@endsection