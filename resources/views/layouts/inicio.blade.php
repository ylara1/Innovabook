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
        <link href="images/Logo2.png" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!-- JavaScript-->
        <script src="{{ asset('js/app.js') }}" defer></script>
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
                                                <img src="images/logo hori 1.4.png" alt="LIBRARIA" />
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
        
        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                        <figure>
                            <img alt="Home Slide" src="images/img5.jpg" />
                        </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>introdúzcase en el mundo de la literatura!</h3>
                            <h2>Descubre la nuevas historias</h2>
                            <p></p>
                            <div class="slide-buttons hidden-sm hidden-xs">    
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="images/img5.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Conoce las historias de los demás</h3>
                            <h2>Un libro es una experiencia de vida</h2>
                            <p></p>
                            <div class="slide-buttons hidden-sm hidden-xs">    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->
        
        <!-- Start: Search Section -->
        <section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <h3>¿Qué buscas en la libreria?</h3>
                    <form action="index.html" method="get">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="keywords">Buscar por palabra clave</label>
                                <input class="form-control" placeholder="Buscar por palabra clave" id="keywords" name="keywords" type="text">
                            </div>
                        </div>
                      
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                <select name="category" id="category" class="form-control">
                                    <option>Todas las Categorias</option>
                                    <option>Accion</option>
                                    <option>Suspeso</option>
                                    <option>Misterio</option>
                                    <option>Terror</option>
                                    <option>Jovenes</option>
                                    <option>Romance</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="submit" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End: Search Section -->
        
        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <figure>
                                    <img src="images/logo hori 1.4.png" alt="LIBRARIA" />
                                </figure>
                                <br>
                                <h2 class="section-title">bienvenido a Innovabook</h2>
                                <span class="underline left"></span>
                                <p class="lead">El lugar donde subir tus historias</p>
                                <p>Los escritores novatos hoy en día suelen tener problemas para ser reconocidos en
                                    el mundo de la literatura y en sí, poder recibir apoyo en estas, obtener las ganancias
                                    que merecen por sus obras y/o de recibir la opinión de los usuarios respecto a su obra.
                                    Adicionalmente los lectores que quieren apoyar a sus autores favoritos y encontrar
                                    nuevas obras para leer, tienen grandes dificultades para eso ya que no hay una forma
                                    de apoyo más allá de la compra de libros lo cual no le deja todas las ganancias a los
                                    autores.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="facts-counter">
                            <ul>
                                <li class="bg-light-green">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="ebook"></i>
                                        </div>
                                        <span>eBooks<strong class="fact-counter">45780</strong></span>
                                    </div>
                                </li>
                           
                                <li class="bg-red">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="magazine"></i>
                                        </div>
                                        <span>Magazine<strong class="fact-counter">14450</strong></span>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->
        
        <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Mira nuestro contenido</h2>
                            <span class="underline center"></span>
                            <p class="lead"></p>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">
                    <div class="filter btn" data-filter="all">Todos las categorias </div>
                    <div class="filter btn" data-filter=".adults">Acción</div>
                    <div class="filter btn" data-filter=".kids-teens">Suspenso</div>
                    <div class="filter btn" data-filter=".video">Misterio</div>
                    <div class="filter btn" data-filter=".audio">Terror</div>
                    <div class="filter btn" data-filter=".books">Jovenes</div>
                    <div class="filter btn" data-filter=".magazines">Romance</div>
                </div>
            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <li class="category-item adults">
                        <figure>
                            <img src="images/accion1.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="images/suspenso1-1.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item video">
                        <figure>
                            <img src="images/misterio1-1.png" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item audio">
                        <figure>
                            <img src="images/terror1-1.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item books">
                        <figure>
                            <img src="images/jovenes1-1.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item magazines">
                        <figure>
                            <img src="images/romance1-1.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item adults">
                        <figure>
                            <img src="images/accion2-2.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="images/suspenso2-2.jpg" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <div class="center-content">
                   
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
              <!-- Start: Welcome Section -->
              <section class="welcome-sectionn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="welcome-wrap">
                                <div class="welcome-text">
                                    <h2 class="section-title">Ventajas de Innovabook</h2>
                                    <span class="underline left"></span>
                                    <p class="lead">El lugar donde subir tus historias</p><br>
                                    <ul>
                                        <li>Ayuda a los escritores novatos para darse a conocer</li><br>
                                        <li>Facilidad de publicación</li><br>
                                        <li>Pocibilidad de ser apoyado/a</li><br>
                                        <li>Buena interacción entre el autor y el lector</li><br>
                                        <li>Aca puede incontrar mucha variedad para leer</li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="facts-counter">
                                <ul>
                                    <li class="bg-light-green">
                                        <div class="fact-item">
                                            <div class="fact-icon">
                                                <i class="ebook"></i>
                                            </div>
                                            <span>eBooks<strong class="fact-counter">45780</strong></span>
                                        </div>
                                    </li>
                               
                                    <li class="bg-red">
                                        <div class="fact-item">
                                            <div class="fact-icon">
                                                <i class="magazine"></i>
                                            </div>
                                            <span>Magazine<strong class="fact-counter">14450</strong></span>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome-image"></div>
            </section>
            <!-- End: Welcome Section -->
        
        
         <!-- Start: Category Filter -->
        
        <!-- Start: Meet Staff -->
       
        <!-- End: Meet Staff -->
        
        <!-- Start: Latest Blog -->
       
        <!-- End: Latest Blog -->
        
        <!-- Start: Our Community Section -->
       
        <!-- End: Our Community Section -->
        
        <!-- Start: News & Event -->
        
        <!-- End: News & Event -->
        
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