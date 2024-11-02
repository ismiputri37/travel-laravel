<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- agaar titkenya dinamis -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <!-- assistant font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- playfair display font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url ('frontend/styles/main.css') }} ">
</head>
<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="frontend/images/logo.png" alt="logo ikhlas">
            </a>
            <button 
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navb"
            >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <!-- ml: margin left auto ke kiri, ada ruang kosong di tengah, mr: margin right -->
            <ul class="navbar-nav ml-auto mr-3">
                <!-- m: margin, x koordinat x,  -->
                <li class="nav-item mx-md-2"><a href="#" class="nav-link" active>Home</a></li>
                <li class="nav-item mx-md-2"><a href="#" class="nav-link">Travel Package</a></li>
                <!-- dropdown services -->
                <li class="nav-item dropdown">
                    <a href="#" 
                    class="nav-link dropdown-toggle" 
                    id="navbardrop" 
                    data-toggle="dropdown"
                    >
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonials</a>
                </li>
            </ul>

            <!-- Mobile Button -->
            <!-- di layar kecil (mobiletampilannya jadi block -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0">
                    Login
                </button>
            </form>

            <!-- Desktop Button -->
            <!-- my kasih jarak 2, layar gede koord d tidak kasih jarak, 
             d-none tidak dimunculin sama sekali, saat dmd block baru munculin button tsb-->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Login
                </button>
            </form>
        </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Rewards</a></li>
                                <!-- <li><a href="#">Affiliate</a></li> -->
                            </ul>
                        </div>


                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>
                                <!-- <li><a href="#">Affiliate</a></li> -->
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Ende</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">ismi.putri397@gmail.com</a></li>
                                <!-- <li><a href="#">Affiliate</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row border-top 
            justify-content-center 
            align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">
                2024 Copyright Ismiks All Right Reserved
                Made in Ende
            </div>
        </div>
        </div>
    </footer>

    <script src="{{url('frontend/libraries/jquery/jquery-3.7.1.js') }}"></script>
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{url('frontend/libraries/retina/retina.min.js') }}"></script>

</body>
</html>