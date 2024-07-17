@extends('master', ['header2' => true]) @section('title', 'Our Partners') @section('content')

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
                <h2>{!! $page->heading_1 !!}</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
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
                    {{-- <img src="{{ asset('assets/img/images/Handshake gesture 3d cartoon style icon (1).webp') }}" style="width: 600px;" alt="Thumb"> --}}
                </div>
                {{-- <h2>Codiantech: A Trailblazing Journey Since 2017 with Global Partnerships</h2>
                <h2>Introduction:</h2>
                <p>
                    Since its inception in 2017, Codiantech has emerged as a frontrunner in the realm of software
                    solutions, pioneering innovation, and excellence in the digital landscape. With a commitment to
                    delivering cutting-edge technology solutions and unparalleled customer satisfaction, Codiantech has
                    solidified its position as a trusted partner for businesses worldwide. Alongside its journey of
                    growth and success, Codiantech has established strategic partnerships with sister companies across
                    different regions, further expanding its reach and capabilities to serve diverse markets.
                <h3>Codiantech's Sister Companies:</h3>
                <h4>Newmavericks (Saudi Arabia):</h4>
                <p>
                    Newmavericks, based in Saudi Arabia, is a sister company of Codiantech, specializing in innovative
                    technology solutions tailored to the unique needs of the Middle East region.
                    With a focus on digital transformation and industry-specific expertise, Newmavericks collaborates
                    closely with Codiantech to deliver customized solutions that drive business growth and success in
                    the Saudi Arabian market.

                </p>
                <h4>Aravez (Dubai):</h4>
                <p>
                    WAravez, headquartered in Dubai, is another sister company of Codiantech, serving as a strategic
                    partner for businesses seeking advanced technology solutions in the Gulf region.
                    Through synergistic collaborations with Codiantech, Aravez delivers comprehensive software services,
                    digital marketing solutions, and IT consulting services, enabling businesses in Dubai to thrive in
                    today's competitive landscape.
                </p>
                <h4>Global Venture Resource (USA):</h4>
                <p>
                    Global Venture Resource, based in the USA, is a sister company of Codiantech, specializing in
                    venture capital funding, business consulting, and strategic partnerships.
                    Leveraging its extensive network and industry expertise, Global Venture Resource partners with
                    Codiantech to support startups and enterprises in the USA with innovative technology solutions and
                    growth strategies.
                </p>
                <h4>Houston, TX Presence:</h4>
                <p>Codiantech extends its presence to Houston, Texas, further strengthening its foothold in the United
                    States and facilitating closer collaboration with clients in the region.
                    Through its Houston presence, Codiantech provides localized support, personalized services, and
                    tailored solutions to businesses in Houston and beyond, reinforcing its commitment to delivering
                    value-driven outcomes and fostering long-term partnerships.
                </p>
                <h3>Conclusion:</h3>
                <p>As Codiantech continues its journey of innovation and growth since 2017, its strategic partnerships
                    with sister companies such as Newmavericks, Aravez, and Global Venture Resource, along with its
                    presence in Houston, Texas, reflect its global expansion and commitment to serving diverse markets
                    with excellence. Together with its sister companies, Codiantech remains dedicated to driving digital
                    transformation, empowering businesses, and shaping the future of technology across the globe.</p> --}}
                
                    {!! $page->para_1 !!}
                    <div class="row thumbs">
                    <div class="col-lg-12 col-md-6 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $page->img_2)) }}"
                            style="width: 400px;" alt="Thumb">

                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <img src="" alt="Thumb">
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 sidebar">
                <div class="sidebar-item link">
                    <ul>
                        <li><a href="#">CodianTech</a></li>
                        <li><a href="#">Newmavericks (Saudi Arabia)</a></li>
                        <li><a href="#">Global Venture Resource (USA)</a></li>
                        <li><a href="#">Aravez (Dubai)</a></li>
                        <li><a href="#">Houston, TX Presence</a></li>
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
