<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
    <li>
        <a href="/">Home</a>
    </li>
    <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Company</a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">About Company</a></li>
                        <li><a href="why-choose-us.html">Why Choose us</a></li>
                        <li><a href="team.html">Meet Our Team</a></li>
                        <li><a href="team-single.html">Team Single</a></li>
                        <li><a href="contact.html">Get in Touch</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="404.html">Error Page</a></li>
                    </ul>
                </li> -->
    <li>
        <a href="{{ url('about-us') }}">About</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
        <ul class="dropdown-menu">
            <li><a href="/services/UI-UX">UI/UX /Graphic Designing</a></li>
            <li><a class="active" href="/services/DevOps">DevOps</a></li>
            <li><a href="/services/cyber-security">Cyber Security</a></li>
            <li><a href="/services/video-editing">Video editing and animation</a></li>
            <li><a href="/services/web-development">Web development and custom software
                </a></li>
            <li><a href="/services/mobile-app">Mobile App
                </a></li>
        </ul>
    </li>
    <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Case Studies</a>
                    <ul class="dropdown-menu">
                        <li><a href="case-studies-1.html">Versino One</a></li>
                        <li><a href="case-studies-2.html">Versino Two</a></li>
                        <li><a href="case-studies-3.html">Versino Three</a></li>
                        <li><a href="case-details.html">Case Details</a></li>
                    </ul>
                </li> -->
    <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-standard.html">Blog Standard</a></li>
                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                        <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                        <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                    </ul>
                </li> -->

    <li>
        <a href="{{ url('our-partners') }}">Partners</a>
    </li>
    <li>
        <a href="{{ url('contact') }}">Contact</a>
    </li>
</ul>