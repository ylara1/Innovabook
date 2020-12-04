<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="/images/Logo2.png" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Responsive Table -->
        <link rel="stylesheet" type="text/css" href="/css/responsivetable.css" />

        <!-- Accordion Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/css/jquery.accordion.css">

        <!-- Stylesheet -->
        <link href="/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
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
                                            <a href="/index-2.html">
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
                                                <li class="nav-item dropdown">
                                                    @if (! auth()->user())
                                                    <a href="/{{ url('login') }}"><i class="fa fa-lock"></i>Iniciar Sesion / Registrarse</a>
                                                    @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            Bienvenido! {{ Auth::user()->name }}
                                                        </a>
                        
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="/{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                        
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                            
                                                            <a href="/{{ url('/actualizar_perfil') }}" class="dropdown-item">Actualizar perfil</a>

                                                        </div>

                                                        
                                                    </li>
                                                @endif

                                                    
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
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
                
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/index-2.html">Home</a></li>
                        <li>Libro:{{ $libro->Nombre_libro }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-15 ">
                                    <div class="booksmedia-detail-box">
                                        <div class="col-md-15 col-md-offset-2">
                                            <iframe scrolling="no" width="800" height="700" src="{{ asset('/storage/documents/'.$autor->id.'/'.$libro->Id_libro.'/'.$capitulo->link_cap) }}"  frameborder="0"></iframe>
                                        </div>

                                        <ul class="detail-page-listing">
                                            
                                        </ul>
                                        <div class="table-tabs" id="responsiveTabs">
                                            
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                                    <form action="" method="post">
                                                        
                                                    </form>
                                                </div>
                                                <div id="sectionB" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>
                                                <div id="sectionC" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>
                                                <div id="sectionD" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>                                                    
                                                <div id="sectionE" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
                                                </div>                                                    
                                                <div id="sectionF" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.</p>
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
        <!-- End: Products Section -->

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