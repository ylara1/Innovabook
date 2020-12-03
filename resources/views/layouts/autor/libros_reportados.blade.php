<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Catálogo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="mod/assets/icons/book.ico" />
    <script src="mod/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="mod/css/sweet-alert.css">
    <link rel="stylesheet" href="mod/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="mod/css/normalize.css">
    <link rel="stylesheet" href="mod/css/bootstrap.min.css">
    <link rel="stylesheet" href="mod/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="mod/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="mod/js/modernizr.js"></script>
    <script src="mod/js/bootstrap.min.js"></script>
    <script src="mod/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="mod/js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="mod/assets/img/logo hori 1.4.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="{{ url('/dashboard-autor') }}"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/mis_libros') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Mis libros</a></li>
                            <li><a href="{{ url('/actualizar_perfil') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Actualizar perfil</a></li>
                            <li><a href="{{ url('/donaciones') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Donaciones</a></li>

                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/nuevo_libro') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="{{ url('/libros_reportados') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Reportados <span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="{{ url('/libros_bloqueados') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Bloqueados</a></li>
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
                   <img src="mod/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">{{ Auth::user()->name }}</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="{{ route('logout') }}" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('logout') }} 
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    
                        
                    
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
              <h1 class="all-tittles">Innovabook <small>Libros reportados</small></h1>
            </div>
        </div>
         
        <div class="container-fluid" style="margin: 0 0 50px 0;">
            <h2 class="text-center" style="margin: 0 0 25px 0;">Libros reportados</h2>
        </div>
        <div class="container-fluid">
            @if (count($libros))
                @foreach ($libros as $l)
                    @foreach ($autores as $au)
                        @foreach ($comentarios as $com)
                            
                        
                        @if ($l->Id_user == $au['id'])
                            @if ($l->Estado=="Activo")
                                @if ($l->Id_user == auth()->user()->id)
                                    @if ($com->Id_libro == $l->Id_libro)
                                        @if ($com->Id_tipo_com == 2)
                                            <div class="media media-hover">
                                                <div class="media-left media-middle">
                                                    <a href="#!"  class="zmdi zmdi-book zmdi-hc-4x" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{ $l->Nombre_libro }}</h4>
                                                    <div class="pull-left">
                                                        <strong>Autor: </strong>{{ $au->name }}<br>
                                                        <strong>Año: </strong>{{ $l->Fecha_ini }}<br>
                                                    </div>
                                                    
                                                    <p class="text-center pull-right">
                                    
                                                        <a href="{{ url('mis_libros/'.$l->Id_libro) }}" class="btn btn-info btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-eye"></i> &nbsp;&nbsp; Más información</a>
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endif
                        @endforeach
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
                            Innovabook. Todos los derechos reservados. ©
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrolladores</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Yerson Lara, Julian Sanchez, Juan Peña, Diego Santamaria <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2020 Innovabook</div>
        </footer>
    </div>
</body>
</html>