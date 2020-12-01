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
                                                            @if (  auth()->user()->Id_tipo ==1 )
                                                            <a class="dropdown-item" href="{{ url('libros/mis_libros') }}">Mis libros</a>
                                                            @endif
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
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="">categorias</a>
                                         
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
                
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li>Libro: {{ $libros->Nombre_libro }}</li>
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
                                        <div class="single-book-box">                                                
                                            <div class="post-thumbnail">
                                                
                                                <img alt="Book" src="/images/books-media/list-view/book-media-01.jpg" />                                                    
                                            </div>
                                            <div class="post-detail">
                                                
                                                <header class="entry-header">
                                                    <h2 class="entry-title">{{ $libros->Nombre_libro }}</h2>
                                                    <ul>
                                                        <li><strong>Author:</strong>{{ $autores->name }} </li>
                                                        <li><strong>Fecha publicación:</strong> {{ $libros->Fecha_ini }}</li>
                                                        @if (auth()->user())
                                                        <a href="{{ 'donar/'.$libros->Id_libro }}" class="btn btn-dark-gray">Donar</a>
                                                        @endif
                                                    </ul>
                                                </header>
                                            </div>
                                        </div>
                                        <p><strong>Descripción:</strong>{{ $libros->Descripción }}  </p>
                                        <ul class="detail-page-listing">
                                            
                                        </ul>
                                        <div class="table-tabs" id="responsiveTabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="/#sectionA">Capitulos</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Capitulo: </th>
                                                                <th>Ver capitulo: </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($capitulos as $cap )
                                                                <tr>
                                                                    <td>{{ $cap['n_cap'] }}</td>
                                                                    <td><a href="{{ url('libros/'.$libros->Id_libro.'/'.$cap['Id_capitulo']) }}">Ver capitulo</a></td>   
                                                                                                                                     
                                                                </tr>
                                                            @endforeach    
                                                            
                                                            
                                                        </tbody>
                                                    </table>
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
                                            @if (! auth()->user())
                                                <div class="tab-content">
                                                    <p style="color: red">Para comentar debes iniciar sesión</p>
                                                </div>
                                            @else
                                            <div class="tab-content">
                                                <form class="form-horizontal" action="{{ url('libros/comentario/save') }}" method="POST">
                                                    @csrf
                                                    <fieldset>
                                                    
                                                    <!-- Form Name -->
                                                    <legend>Comentarios </legend>
                                                    
                                                    <!-- Textarea -->
                                                    <div class="form-group">
                                                      <label class="col-md-4 control-label text-justify lead" for="">{{ Auth::user()->name }}</label>
                                                      <div class="col-md-8">                     
                                                        <input class="form-control" type="text" id="" name="comentario">
                                                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="id_libro" value="{{ $libros->Id_libro }}">
                                                      </div>
                                                    </div>
                                                    
                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                      <label class="col-md-4 control-label text-justify lead " for="selectbasic">Tipo De Comentario</label>
                                                      <div class="col-md-4">
                                                        <select id="selectbasic" name="id_tipo" class="form-control text-justify lead">
                                                          <option value="1">Positivo</option>
                                                          <option value="2">Denuncia</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    
                                                    <!-- Button -->
                                                    <div class="form-group">
                                                      <label class="col-md-4 control-label " for=""></label>
                                                      <div class="col-md-4">
                                                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                                                      </div>
                                                    </div>
                                                    
                                                    </fieldset>
                                                </form>
                                            </div>
                                            @endif
                                            <div class="tab-content">
                                                <div class="comments-container">
                                                    <h1>Comentarios</h1>
                                            
                                                    <ul id="comments-list" class="comments-list">
                                                        @foreach ($comentarios as $com)
                                                        @foreach ($lectores as $l)
                                                            @if ($com['Id_user'] == $l['id'])
                                                        <li>
                                                            <div class="comment-main-level">
                                                                <!-- Avatar -->
                                                                <!-- Contenedor del Comentario -->
                                                                <div class="comment-box">
                                                                    <div class="comment-head">
                                                                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">{{ $l['name'] }}</a></h6>
                                                                        @if (! auth()->user())
                                                                            
                                                                        @else
                                                                        @if ($com['Id_user'] == Auth::user()->id)
                                                                            
                                                                                <form class="center" action="{{ url('libros/comentario/destroy/'.$com['Id_comentario']) }}" method="post">
                                                                                @csrf
                                                                                <button class=" pull-right" type="submit">Eliminar</button>
                                                                                </form>
                                                                            

                                                                        @endif
                                                                        @endif
                                                                        <span>Subido el:{{ $com['Fecha_com'] }}</span>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="comment-content">
                                                                        {{ $com['texto'] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Respuestas de los comentarios -->
                                                            
                                                        </li>
                                                            @endif
                                                        @endforeach
                                                        @endforeach
                                                        
                                                    </ul>
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