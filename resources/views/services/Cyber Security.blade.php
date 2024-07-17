@extends('master', ['header2' => true]) @section('title', 'Cyber Security') @section('content')

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
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url( {{ asset('assets/img/images/3786012.webp') }} );">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Cyber Security</h2>
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
                    <img src="{{ asset('assets/img/images/6505028 (1).webp') }}" class="cus-img" alt="Thumb">
                </div>
                <h2>Safeguard Your Digital Assets with Codiantech's Cybersecurity Solutions</h2>
                <p>
                    In an era marked by unprecedented digital connectivity, cybersecurity has emerged as a critical
                    concern for businesses of all sizes. With cyber threats growing in complexity and frequency,
                    organizations must fortify their defenses to protect sensitive data, safeguard operations, and
                    maintain customer trust. Codiantech, a trusted leader in software solutions since 2017, offers
                    comprehensive cybersecurity services designed to address the evolving security challenges faced by
                    modern businesses. From threat detection and prevention to incident response and compliance,
                    Codiantech empowers clients to mitigate risks and strengthen their cybersecurity posture.
                <h3>Key Features of Codiantech's Cybersecurity Solutions:</h3>
                <p>
                    Threat Detection and Prevention: Codiantech employs cutting-edge technologies and advanced threat
                    intelligence to detect and prevent a wide range of cyber threats, including malware, ransomware,
                    phishing attacks, and more. By leveraging intrusion detection systems, firewalls, and anomaly
                    detection algorithms, we proactively identify and neutralize threats before they can cause harm to
                    your organization.

                    Vulnerability Assessments and Penetration Testing: Codiantech conducts comprehensive vulnerability
                    assessments and penetration tests to identify weaknesses in your systems, networks, and
                    applications. Through meticulous analysis and simulated attacks, we uncover potential security gaps
                    and vulnerabilities, allowing you to address them proactively before they can be exploited by
                    malicious actors.

                    Security Compliance and Regulatory Support: Codiantech helps clients navigate the complex landscape
                    of security compliance and regulatory requirements. Whether it's GDPR, HIPAA, PCI DSS, or other
                    industry-specific regulations, we ensure that your cybersecurity practices align with relevant
                    standards and guidelines, minimizing the risk of non-compliance and associated penalties.

                    Security Awareness Training: Codiantech offers customized security awareness training programs to
                    educate employees about the latest cybersecurity threats and best practices. By raising awareness
                    and promoting a culture of security-consciousness, we empower your workforce to recognize and
                    respond effectively to potential security risks, reducing the likelihood of successful cyber
                    attacks.

                    Incident Response and Cybersecurity Incident Management: In the event of a security breach or cyber
                    attack, Codiantech provides rapid incident response services to mitigate the impact and restore
                    normal operations swiftly. Our experienced incident response team follows predefined protocols and
                    best practices to contain the incident, investigate the root cause, and implement remediation
                    measures to prevent future occurrences.
                </p>
                <h3>Conclusion:</h3>
                <p>
                    With Codiantech's cybersecurity solutions, organizations can strengthen their defenses, mitigate
                    risks, and safeguard their digital assets against evolving cyber threats. By combining advanced
                    technologies, industry expertise, and proactive strategies, Codiantech helps clients stay ahead of
                    the curve and maintain a resilient cybersecurity posture in today's dynamic threat landscape.
                    Partner with Codiantech and embark on a journey towards comprehensive cybersecurity that protects
                    your business today and in the future.
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
                    <ul>
                        <li><a href="/services/UI-UX">UI/UX /Graphic Designing</a></li>
                        <li><a href="/services/DevOps">DevOps</a></li>
                        <li><a class="active" href="/services/cyber-security">Cyber Security</a></li>
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