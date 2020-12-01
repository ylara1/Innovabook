<!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>..:: InnovaBook ::..</title>
        
        <!-- Favicon -->
        <link href="/images/Logo2.png" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="/style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>


    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{ url('/') }}">
                                                <img src="/images/logo hori 1.4.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                           
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                <a href="signin.html"><i class="fa fa-lock"></i>Iniciar Sesion / Registrarse</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.html">Inicio</a>
                                          
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{ url('libros') }}">libros</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="">categorias</a>
                                         
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="">más papulares</a>
                                         
                                        </li>
                                      
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="home-v2.html">Home V2</a></li>
                                            <li><a href="home-v3.html">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="books-media-list-view.html">Books &amp; Media</a>
                                        <ul>
                                            <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                            <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                            <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                            <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                            <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
       
        <!-- Start: Page Banner -->
        
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Registrarse</h2>
                    <span class="underline center"></span>
                    <p class="lead"></p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">Menú</a></li>
                        <li>Inicio sesion/Registrarse</li>
                    </ul>
                </div>
            </div>
            
        </section>
        <!-- End: Page Banner -->
        
        <!-- Start: Cart Section -->
        
        <div id="content" class="site-content">
            <section class="page-banner services-banner">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        
                                        <div class="col-md-3 col-md-offset-1 border">
                                        </div>
                                        <div class="col-md-5 border new-user">    
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="company-detail bg-dark margin-left">
                                                        <div class="signin-head">
                                                          
                                                            <br>
                                                            <h2>Iniciar Sesión</h2>
                                                            <span class="underline left"></span>
                                                        </div>
                                                        
                                                        <form method="POST" action="{{ url('/admin/login') }}" class="login">
                                                            @csrf
                                    
                                                            <div class="form-row form-row-first input-required">
                                                                <label for="email">
                                                                    <span class="first-letter"></span>
                                                                    <span class="second-letter"></span>
                                                                </label>
                                                                
                                                                    <input id="email" type="email" placeholder="Email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert" style="color: red">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror  
                                                                
                                                            </div>
                                    
                                                            <div class="form-row form-row-last input-required">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                    
                                                                
                                                                    <input id="password" placeholder="Contraseña" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                
                                                            </div>
                                    
                                                            <div class="clear"></div>
                                                            <div class="password-form-row">
                                                                <p class="form-row inpucheckboxt-">
                                                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                        <label class="inline" for="remember" style="color: aliceblue">
                                                                            {{ __('Recuerdame') }}
                                                                        </label>
                                                                </p>
                                                                @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('Olvidaste tu contraseña?') }}
                                                                        </a>
                                                                    @endif
                                                                
                                                            </div>
                                                            
                                                                    
                                                            
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Iniciar sesion') }}
                                                                    </button>
                                    
                                                                    
                                                                
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
        
        <!-- Start: Social Network -->
    
        <!-- End: Social Network -->
        
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            
                        </div>
                        <div class="col-md-5 ">
                            <ul>
                              <li> InnovaBook.Todos los derechos reservados </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>
