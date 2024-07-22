@extends('master', ['header2' => true]) @section('title', $page->title) @section('content')

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
                <h2>{{$page->heading_1}}</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">{{$page->page_name}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

{{-- JOB LISTING --}}
<section class="job_listing m-5">
    <h1 class="text-center">Latest Jobs</h1>
    <div class="row my-5">
        @empty($jobs)
        <h1 style="
            color: rgb(229, 21, 102);
        ">COMMING SOON</h1>
        @endempty
        @foreach ($jobs as $job)
        
        <div class="col-lg-6 col-md-6 my-4">
            <div class="box border rounded-3 shadow px-2 py-3 d-flex  align-items-center justify-content-around">
                <img class="" src="{{ asset('storage/' . str_replace('\\', '/', $job->job_logo)) }}" alt="Title" width="100px"
                    height="100px" />
                <div class="">
                    <h3>{{$job->title}}</h3>
                    <ul class="d-flex" style="gap: 20px;">
                        <li><i class="fas fa-map-marker-alt mr-2"></i>{{$job->location}}</li>
                        <li>{{$job->salary}}&nbsp;PKR</li>
                    </ul>
                </div>
                <a href="{{ url('job/'.$job->title) }}" class="btn btn-success px-5">Apply</a>
            </div>
        </div>
        @endforeach
    </div>
</section>


@endsection