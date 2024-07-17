@extends('master', ['header2' => true]) @section('title', 'Contact Us') @section('content')

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
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
                <h2>Contact Us</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact
    ============================================= -->
<div class="contact-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 contact-form-box">
                <div class="content">
                    <div class="heading">
                        <h2>{!!$page->heading_2!!}</h2>
                        <p>{!!$page->para_1!!}</p>
                    </div>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <div class="g-recaptcha" data-sitekey="6LfFsw4qAAAAAIXIIuES0phS3OqQyvZpvtnzw6z_">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Get a free consultation
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 info">
                <div class="contact-tabs">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                Address
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                Google Maps
                            </a>
                        </li>
                    </ul>
                    <div id="tabsContent" class="tab-content">
                        <div id="tab1" class="tab-pane fade active show">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span>48 A , shumail complex karachi, Pakistan</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span>info@codiantech.com</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span>+92 335 2150938</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact Area -->
<script>
    document.getElementByClass('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var recaptchaResponse = document.getElementById('g-recaptcha-response').value;

        if (recaptchaResponse) {
            // Send the response to the server for verification
            verifyRecaptcha(recaptchaResponse);
        } else {
            alert('Please complete the reCAPTCHA.');
        }
    });

    function verifyRecaptcha(response) {
        fetch('verify_recaptcha.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    response: response
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Handle successful reCAPTCHA verification
                    document.getElementByClass('contact-form').submit();
                } else {
                    alert('reCAPTCHA verification failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>

@endsection
