@extends('master', ['header2' => true]) @section('title', 'DevOps') @section('content')

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
                        <img src="{{ url('storage/' . setting('site.logo')) }}"class="logo" alt="Logo">
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
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url( {{ asset('assets/img/images/25225452_7041508.webp') }} );">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2>DevOps</h2>
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
                        <img src="{{ asset('assets/img/images/25644111_7036172.webp') }}" class="cus-img" alt="Thumb" style="height: 450px">
                    </div>
                    <h2>Streamline Your Development Process with Codiantech's DevOps Services   </h2>
                    <p>
                    In the rapidly evolving landscape of software development, adopting DevOps practices has become imperative for organizations seeking agility, efficiency, and reliability in their processes. Codiantech, a leader in software solutions since 2017, offers comprehensive DevOps services tailored to meet the unique needs of businesses across diverse industries. With a focus on automation, collaboration, and continuous improvement, Codiantech empowers clients to accelerate their development cycles while ensuring high-quality outcomes.                    </p>
                    <h3>What Sets Codiantech's DevOps Services Apart?</h3>
                    <p>
                    Holistic Approach: Codiantech takes a holistic approach to DevOps, integrating development and operations seamlessly throughout the software development lifecycle. From planning and coding to testing, deployment, and monitoring, our DevOps solutions optimize every stage of the process for maximum efficiency and effectiveness.

Automation Expertise: Leveraging the latest automation tools and technologies, Codiantech automates repetitive tasks, enabling rapid and consistent delivery of software releases. By automating build, test, and deployment processes, we minimize human error, reduce time-to-market, and enhance overall productivity.

Continuous Integration and Deployment (CI/CD): Codiantech implements CI/CD pipelines to facilitate the continuous integration, testing, and deployment of code changes. With automated testing and deployment pipelines, we enable frequent, incremental updates, ensuring that software evolves rapidly to meet evolving business needs.

Infrastructure as Code (IaC): Codiantech embraces Infrastructure as Code principles to provision and manage infrastructure through code. By treating infrastructure as code, we enhance consistency, scalability, and reproducibility, while also facilitating rapid provisioning and deployment of resources.

Collaborative Culture: Codiantech fosters a culture of collaboration and communication between development and operations teams. Through transparent communication channels, shared goals, and cross-functional collaboration, we break down silos and promote synergy across teams, leading to smoother workflows and faster delivery cycles.

Security and Compliance: Codiantech prioritizes security and compliance throughout the DevOps process. We implement robust security measures, including code scanning, vulnerability assessments, and access controls, to safeguard sensitive data and mitigate security risks at every stage of development and deployment.
                    </p>
                    <h3>Conclusion:</h3>
                    <p>
                    With Codiantech's DevOps services, organizations can revolutionize their software development practices, unlocking new levels of agility, efficiency, and innovation. By embracing automation, collaboration, and continuous improvement, Codiantech empowers clients to accelerate time-to-market, enhance product quality, and stay ahead in today's dynamic market landscape. Partner with Codiantech and embark on a journey of digital transformation that drives lasting business success.
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
                            <li><a class="active" href="/services/DevOps">DevOps</a></li>
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
