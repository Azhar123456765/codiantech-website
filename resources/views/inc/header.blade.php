<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

        <!-- Start Top Search -->
        <div class="container-full">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav inc-border">
                <ul>
                    <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    <li class="side-menu"><a href="#"><i class="ti-menu-alt"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand p-0" href="/">
                    <img src="{{ url('storage/' . setting('site.logo')) }}" class="logo" alt="Logo" width="85px">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                @include('inc.header_ul')
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="ti-close"></i></a>
            <div class="widget">
                <h4 class="title">Contact Info</h4>
                <ul class="contact">
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info">
                            <span>Email</span> info@codiantech.com
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info">
                            <span>Phone</span> +92 335 2150938
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info">
                            <span>Office Hours</span> Mon - Sat : 8:00 - 4:00
                        </div>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h4 class="title">Additional Links</h4>
                <ul>
                    <li>
                        <a href="{{ url('about-us') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('our-partners') }}">Partners</a>
                    </li>
                    <li>
                        <a href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
