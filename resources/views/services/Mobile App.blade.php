@extends('master', ['header2' => true]) @section('title', 'Mobile App') @section('content')

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
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url( {{ asset('assets/img/images/top-view-nutritional-counter-app.webp') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Mobile App</h2>
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
                    <img src="{{ asset('assets/img/images/4478107 (1).webp') }}" class="cus-img" alt="Thumb">
                </div>
                <h2>Elevate Your Business with Codiantech's Comprehensive Mobile App Development Services</h2>
                <p>
                    In the dynamic world of mobile technology, having a strong presence across various platforms is
                    essential for businesses to reach their target audience effectively. Codiantech, a renowned leader
                    in software solutions since 2017, offers a comprehensive suite of mobile application development
                    services tailored to meet the diverse needs of businesses across industries. Whether you're looking
                    to develop native apps, hybrid solutions, or explore emerging technologies, Codiantech has the
                    expertise and experience to turn your mobile app ideas into reality and drive success in the digital
                    realm.</p>
                <h3>Key Mobile App Development Services Offered by Codiantech:</h3>
                <h4>Native App Development:</h4>
                <p>
                    Codiantech specializes in native app development for iOS and Android platforms, leveraging the full
                    potential of each platform's capabilities to deliver high-performance, feature-rich applications.
                    Our native app development services ensure seamless integration with device-specific features,
                    optimal performance, and an exceptional user experience tailored to each platform's guidelines and
                    standards.
                </p>
                <h4>Hybrid App Development:</h4>
                <p>
                    Codiantech offers hybrid app development services that combine the best of both native and web
                    technologies, allowing businesses to reach a broader audience across multiple platforms with a
                    single codebase.
                    Using frameworks like React Native, Ionic, and Xamarin, we develop hybrid apps that deliver
                    native-like performance, access to device features, and cross-platform compatibility, while
                    minimizing development time and costs.
                    Progressive Web App (PWA) Development:

                    Codiantech helps businesses leverage the power of Progressive Web Apps (PWAs) to deliver fast,
                    engaging, and reliable experiences to users across devices and platforms.
                    Our PWA development services focus on building web applications that function seamlessly on any
                    device, offer offline capabilities, and provide an app-like experience through features like push
                    notifications and home screen installation.
                    Augmented Reality (AR) and Virtual Reality (VR) Development:

                    Codiantech explores the potential of emerging technologies like AR and VR to create immersive,
                    interactive experiences that captivate users and enhance brand engagement.
                    Whether it's developing AR-enabled mobile apps for retail, education, or gaming, or creating VR
                    simulations for training and entertainment purposes, our team leverages cutting-edge technologies to
                    push the boundaries of mobile app development.

                </p>
                <h3>Conclusion:</h3>
                <p>
                    With Codiantech's comprehensive mobile application development services, businesses can harness the
                    power of mobile technology to drive innovation, engage users, and achieve their strategic objectives
                    across platforms and devices. Whether you're looking to develop native apps, hybrid solutions, or
                    explore emerging technologies like AR and VR, Codiantech has the expertise and experience to bring
                    your mobile app ideas to life and propel your business to new heights in the digital age. Partner
                    with Codiantech and embark on a journey of mobile innovation and success.
                </p>
                               {{-- <div class="row thumbs">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/img/800x600.png') }}" alt="Thumb">
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4 sidebar">
                <div class="sidebar-item link">
                    <li><a href="/services/UI-UX">UI/UX /Graphic Designing</a></li>
                    <li><a  href="/services/DevOps">DevOps</a></li>
                    <li><a href="/services/cyber-security">Cyber Security</a></li>
                    <li><a href="/services/video-editing">Video editing and animation</a></li>
                    <li><a href="/services/web-development">Web development and custom software
                        </a></li>
                    <li><a class="active" href="/services/mobile-app">Mobile App
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
{{-- <div class="clients-area default-padding-bottom">
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
</div> --}}
<!-- End Clients Area -->

@endsection