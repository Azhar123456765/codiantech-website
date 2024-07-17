@extends('master', ['header2' => true]) @section('title', 'Video editing and animation ') @section('content')

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
    style="background-image: url( {{ asset('assets/img/irham-setyaki-1vP7tqexb8g-unsplash.jpg') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Video editing and animation </h2>
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
                    <img src="{{ asset('assets/img/images/19199302 (1).webp') }}" alt="Thumb" class="cus-img" style="height: 450px">
                </div>
                <h2>Bring Your Vision to Life with Codiantech's Premier Video Editing and Animation Services</h2>
                <p>
                    In today's digital landscape, video content has become a powerful tool for businesses to engage,
                    educate, and entertain their audience. Codiantech, a trusted leader in software solutions since
                    2017, offers expert video editing and animation services designed to help businesses create
                    captivating visual experiences that leave a lasting impression. Whether you need professional video
                    editing, stunning animations, or engaging motion graphics, Codiantech's team of creative
                    professionals is dedicated to bringing your vision to life with precision and flair.</p>
                <h3>Key Features of Codiantech's Video Editing and Animation Services:</h3>
                <p>
                    Professional Video Editing: Codiantech provides comprehensive video editing services to enhance the
                    quality and impact of your footage. From trimming and cutting to color correction and audio
                    mastering, our skilled editors ensure that your videos are polished to perfection, ready to
                    captivate your audience and convey your message effectively.

                    Dynamic Motion Graphics: Codiantech specializes in creating dynamic motion graphics that add flair
                    and excitement to your videos. Whether it's animated logos, text overlays, or eye-catching
                    transitions, our talented animators use industry-leading tools and techniques to create visually
                    stunning graphics that enhance the visual appeal of your content.

                    Animated Explainer Videos: Looking to simplify complex ideas and concepts? Codiantech crafts
                    animated explainer videos that communicate your message in a clear, concise, and engaging manner.
                    From storyboard development to character animation and voiceover narration, we create compelling
                    videos that educate, inform, and entertain your audience.

                    Product Demonstrations and Tutorials: Codiantech helps businesses showcase their products and
                    services effectively through engaging product demonstrations and tutorials. Whether you're launching
                    a new product or explaining how to use your software, our video editing and animation services
                    ensure that your content is visually appealing, informative, and easy to understand.

                    Branding and Promotional Videos: Codiantech collaborates with businesses to create branding and
                    promotional videos that reflect their unique identity and value proposition. Whether you're
                    promoting a new product, announcing a special offer, or sharing customer testimonials, our video
                    editing and animation services help you create compelling content that drives engagement and
                    conversions.
                </p>
                <h3>Conclusion:</h3>
                <p>
                    With Codiantech's video editing and animation services, businesses can elevate their visual content
                    and stand out in today's competitive digital landscape. Whether you need professional video editing,
                    stunning animations, or engaging motion graphics, Codiantech's creative professionals are dedicated
                    to bringing your vision to life with precision and flair. Partner with Codiantech and unlock the
                    power of compelling visual storytelling to captivate your audience and achieve your business
                    objectives. </p>
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
                    <li><a class="active" href="/services/video-editing">Video editing and animation</a></li>
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
