@extends('master', ['header2' => true]) @section('title', 'Web development and custom softwareWeb development and custom
software') @section('content')

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
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url( {{ asset('assets/img/images/2150010125.jpg') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Web development and custom softwareWeb development and custom software</h2>
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
                    <img src="{{ asset('assets/img/images/5124556 (1).webp') }}" class="cus-img" alt="Thumb">
                </div>
                <h2>Empower Your Online Presence with Codiantech's CMS Web Development and Custom Software Solutions
                </h2>
                <p>
                    Codiantech, a pioneering force in software solutions since 2017, offers a comprehensive suite of
                    services tailored to meet the diverse needs of businesses seeking to establish a robust online
                    presence. With expertise in CMS web development and custom software solutions, including PHP, Ruby
                    on Rails, Magento, and Drupal Commerce, Codiantech empowers clients to create dynamic, scalable, and
                    feature-rich websites and applications that drive growth, enhance user experiences, and achieve
                    business objectives with precision and efficiency. </p>
                <h3>Key Services Offered by Codiantech: </h3>
                <p>
                    CMS Web Development: Codiantech specializes in developing websites powered by Content Management
                    Systems (CMS) that allow clients to manage and update their content with ease. Whether it's
                    WordPress, Joomla, Drupal, or another CMS platform, our experienced developers customize solutions
                    to fit your specific requirements, ensuring seamless integration, intuitive navigation, and robust
                    functionality.

                    Custom Software Development: Codiantech excels in crafting bespoke software solutions tailored to
                    meet the unique needs of businesses across diverse industries. From enterprise applications and
                    e-commerce platforms to custom web portals and CRM systems, our team leverages cutting-edge
                    technologies and agile methodologies to deliver scalable, secure, and user-friendly software
                    solutions that drive innovation and accelerate business growth.

                    PHP Development: With extensive experience in PHP development, Codiantech builds powerful web
                    applications and dynamic websites that leverage the flexibility and scalability of the PHP
                    programming language. Whether it's building custom PHP applications from scratch or enhancing
                    existing solutions, our PHP developers deliver high-quality, performance-driven solutions that meet
                    and exceed client expectations.

                    Ruby on Rails Development: Codiantech harnesses the power of Ruby on Rails to develop robust,
                    scalable, and maintainable web applications that meet the evolving needs of modern businesses. From
                    prototyping and MVP development to full-scale application deployment, our Ruby on Rails developers
                    leverage the framework's conventions over configuration principle to deliver efficient,
                    cost-effective solutions that drive business success.

                    Magento Development: Codiantech specializes in Magento development, offering end-to-end e-commerce
                    solutions that empower businesses to create immersive online shopping experiences. Whether it's
                    building custom Magento themes, developing extensions, or optimizing performance, our Magento
                    experts leverage the platform's flexibility and scalability to help clients achieve their e-commerce
                    goals and drive revenue growth.

                    Drupal Commerce Development: Codiantech provides comprehensive Drupal Commerce development services,
                    helping businesses create powerful e-commerce websites that deliver seamless shopping experiences
                    and drive conversions. From custom module development to theme customization and integration with
                    third-party systems, our Drupal Commerce developers ensure that your online store stands out in
                    today's competitive marketplace.
                </p>
                <h3>Conclusion:</h3>
                <p>
                    With Codiantech's CMS web development and custom software solutions, businesses can unlock the full
                    potential of their online presence, drive innovation, and achieve sustainable growth. Whether you're
                    looking to build a dynamic website, launch an e-commerce platform, or develop custom software
                    applications, Codiantech's team of experts is committed to delivering tailored solutions that align
                    with your business goals and exceed your expectations. Partner with Codiantech and embark on a
                    journey of digital transformation that drives lasting success in today's dynamic market landscape.
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
                    <li><a href="/services/DevOps">DevOps</a></li>
                    <li><a href="/services/cyber-security">Cyber Security</a></li>
                    <li><a href="/services/video-editing">Video editing and animation</a></li>
                    <li><a class="active" href="/services/web-development">Web development and custom software
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