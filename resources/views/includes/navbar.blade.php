<div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="{{ route('home')}}" class="navbar-brand">
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