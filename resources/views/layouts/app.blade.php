<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="https://adipost.herokuapp.com/assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="https://adipost.herokuapp.com/assets/css/responsive.css">

<style>
.form-input input
{
    display:none;
}
.form-input label{
    display:block;
    width:80%;
    background:#007bff;
    height:50px;
    color:white;
    line-height:50px;
    border-radius:10px;
    cursor:pointer;
    text-align:center;

}
</style>
</head>

<body class="homepage-3">


    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="#">
                        <!-- <h2>Logo</h2> -->
                   LARAVEL
                        <!--<img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo">-->
                    </a>
                 
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                 @yield('nav')
                    <!-- Navbar Action Button -->
                   
     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->

    
@yield('content')
        <!--====== Footer Area Start ======-->
        <footer class="section footer-area">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row pb-4">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <!-- <h2>Logo</h2> -->
                             
                                <p class="mb-2 sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.</p>
                                <!-- Social Icons -->
                                <ul class="social-icons list-inline pt-2">
                                    <li class="list-inline-item px-1 bgcolor"><a href="#" class="pdintst"><i class="fab fa-facebook-f" style="color: #365492;"></i></a>
                                    </li>
                                    <li class="list-inline-item px-1 bgcolor"><a href="#" class="pdintst"><i class="fab fa-twitter" style="color: #1488d0;" ></i></a>
                                    </li>
                                    <li class="list-inline-item px-1 bgcolor"><a href="#" class="pdintst"><i class="fab fa-youtube" style="color: #FF0000;"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <!-- Footer Items -->
                            <div class="footer-items">

                                <ul>
                                    <li class="py-2"><a class="sub-title fn" href="#">Home</a></li>
                                    <li class="py-2"><a class="sub-title fn" href="#">About Us</a></li>
                                    <li class="py-2"><a class="sub-title fn" href="#">Blog</a></li>
                                    <li class="py-2"><a class="sub-title fn" href="#">Features</a></li>
                                    <li class="py-2"><a class="sub-title fn" href="#">Contact Us</a></li>
                                    <li class="py-2"><a class="sub-title fn" href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4" style="text-align:end;">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-uppercase">Subscribe Now</h3>
                                <p class="mb-2 sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.</p>
                                    <form action="" method="post">
                                        <div class="input-group mb-3">
                                          <input type="email" class="form-control" style="    border-right: none;" placeholder="E-mail">
                                          <div class="input-group-append postined">
                                            <div class="input-group-text border">
                                                Subscribe
                                           
                                            </div>
                                          </div>
                                        </div>
                                       
                                        
                                      </form>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <p class="text-white">Copyright 2021</p> 
                </div>
            </div>

        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus,
                                            dapibus sed imperdiet consectetur.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group">
                                        <input type="text" class="form-control" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

  <script>
  function showPreview(event)
  {
      if(event.target.files.length>0)
  {
      var src=URL.createObjectURL(event.target.files[0]);
      var preview=document.getElementById('file-ip-1-preview');
      preview.src=src;
      preview.style.display="block";
  }
  }
  </script>
</body>

</html>
