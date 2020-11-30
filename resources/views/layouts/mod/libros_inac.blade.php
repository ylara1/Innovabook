<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
        <script src="/mod/js/sweet-alert.min.js"></script>
        <link rel="stylesheet" href="/mod/css/sweet-alert.css">
        <link rel="stylesheet" href="/mod/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/mod/css/normalize.css">
        <link rel="stylesheet" href="/mod/css/bootstrap.min.css">
        <link rel="stylesheet" href="/mod/css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="/mod/css/style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/mod/js/modernizr.js"></script>
        <script src="/mod/js/bootstrap.min.js"></script>
        <script src="/mod/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/mod/js/main.js"></script>
    </head>
    <body>
    
        <div class="navbar-lateral full-reset">      
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile custom-scroll-containers">
                
                <div class="full-reset" style="background-color:#33414e; padding: 10px 0; color:#fff;">
                    <figure>
                        <img src="/mod/assets/img/logo hori 1.4.png" alt="Biblioteca" class="img-responsive center-box" style="width:65%;">
                    </figure>
                    
                </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="{{ url('admin/home') }}"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('mod/nuevo_mod') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('admin/libros') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                            <li><a href="{{ url('admin/reportados') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Reportados <span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="{{ url('admin/inactivos') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Bloqueados</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="/mod/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">{{ Auth::guard('admin')->user()->name }}</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power">
                        <a href="{{ url('/admin/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                
                    </i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Catálogo de libros</h1>
            </div>
        </div>
         <div class="container-fluid"  style="margin: 40px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/checklist.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido al catálogo, selecciona una categoría de la lista para empezar, si deseas buscar un libro por nombre o título has click en el icono &nbsp; <i class="zmdi zmdi-search"></i> &nbsp; que se encuentra en la barra superior
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin: 0 0 50px 0;">
            <h2 class="text-center" style="margin: 0 0 25px 0;">Libros bloqueados</h2>
        </div>
        <div class="container-fluid">
            @if (count($libros))
                @foreach ($libros as $l)
                    @foreach ($autores as $au)
                        @if ($l->Id_user == $au->id)
                        @if ($l->Estado=="Inactivo")
                            
                        
                        <div class="media media-hover">
                            <div class="media-left media-middle">
                                <a href="#!" class="zmdi zmdi-book zmdi-hc-4x" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $l->Nombre_libro }}</h4>
                                <div class="pull-left">
                                    <strong>Autor: </strong>{{ $au->name }}<br>
                                    <strong>Año: </strong>{{ $l->Fecha_ini }}<br>
                                    <strong>Razón bloqueo: </strong>{{ $l->razon }}<br>
                                </div>
                                
                                <p class="text-center pull-right">
                                    <form method="POST" class="text-center pull-right" action="{{ url('admin/desbloquear_libro') }}">
                                        @csrf
                                    <input type="hidden" name="id" value="{{ $l->Id_libro }}">                                    
                                    <button class="btn btn-success"><i class="zmdi zmdi-check"></i> </button>
                                    </form>
                                    <a href="{{ url('admin/libros/detalles/'.$l->Id_libro) }}" class="btn btn-info pull-right" style="margin-right: 10px;"><i class="zmdi zmdi-eye"></i></a>

                                </p>
                            </div>
                        </div>
                        @endif
                        @endif
                    @endforeach
                @endforeach
            @endif
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quam dicta et, ipsum quo. Est saepe deserunt, adipisci eos id cum, ducimus rem, dolores enim laudantium eum repudiandae temporibus sapiente.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Carlos Alfaro <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2016 Carlos Alfaro</div>
        </footer>
    </div>
</body>
</html>