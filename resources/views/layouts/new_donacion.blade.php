<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: InnovaBook ::..</title>

    <!-- Favicon -->
    <link href="/images/Logo2.png" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
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
    <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="{{ ('/') }}">
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
                                            @if (! auth()->user())
                                                <a href="{{ url('login') }}"><i class="fa fa-lock"></i>Iniciar Sesion / Registrarse</a>
                                                @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        Bienvenido! {{ Auth::user()->name }}
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
                                                        
                                                        <a href="{{ url('/actualizar_perfil') }}" class="dropdown-item">Actualizar perfil</a>

                                                    </div>

                                                    
                                                </li>
                                            @endif
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{ url('/') }}">Inicio</a>
                                      
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{ url('libros') }}">Libros</a>
                                     
                                    </li>
                                    
                                   
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
                <h2>Donar</h2>
                <span class="underline center"></span>
                <p class="lead"></p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('/') }}">Menú</a></li>
                    <li>Donar</li>
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
                                        <div class="col-md-2 col-md-offset-1 border">
                                            
                                            
                                        </div>

                                        <div class="col-md-5 border new-user">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail new-account bg-light margin-right">
                                                        <div class="new-user-head">
                                                            <h2>Donar</h2>
                                                            <span class="underline left"></span>
                                                            <p></p>
                                                        </div>
                                                        <form autocomplete="null" class="login" method="post" action="{{ url('libros/donacion/save') }}">
                                                            @csrf
                                                            <p class="form-row form-row-first input-required">
                                                                
                                                                <input type="number" id="name" name="monto" placeholder="Digite el valor"
                                                                    class="input-text">
                                                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                                                    <input type="hidden" name="id_libro" value="{{ $libro->Id_libro }}">
                                                            </p>
                                                            
                                                            <div class="clear"></div>
                                                            <input type="submit" 
                                                                class="button btn btn-default">
                                                            <div class="clear"></div>
                                                            @if (session('exito'))
                                                                <p class="alert-success">{{ session('exito') }}</p>
                                                            @endif
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
    <script type="text/javascript" src="/js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="/js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="/js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="/js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="/js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="/js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="/js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="/js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="/js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="/js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="/js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="/js/bxslider.min.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="/js/main.js"></script>

</body>


</html>