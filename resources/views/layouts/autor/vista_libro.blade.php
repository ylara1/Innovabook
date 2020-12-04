<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Comentarios</title>
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
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="/mod/assets/img/logo hori 1.4.png" alt="Biblioteca" class="img-responsive center-box"
                    style="width:65%;">
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
                            <li><a href="{{ url('/nuevo_libro') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
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
                   <img src="/mod/assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
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
                
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Innovabook <small>Libro</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                <li class="active"><a href="loanreservation.html">Descripción</a></li>
            </ul>
        </div>
        <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="/mod/assets/img/odisea.png" alt="clock" class="img-responsive center-box"
                        style="max-width: 200px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <p> Nombre: {{ $libros->Nombre_libro }}</p>
                    <p> Autor: {{ Auth::user()->name }} </p>
                    <p> Fecha Inicio: {{ $libros->Fecha_ini }}</p>
                    <P> Descripción: {{ $libros->Descripción }}</P> 
                </div>
                   <!-- Button -->
              <div class="form-group pull-right">
                <label class="col-md-6 control-label" for=""></label>
                <div class="col-md-4">
                    <button class="btn btn-primary"><a href="{{ url('mis_libros/edit/'.$libros->Id_libro) }}" style="color: white">Actualizar libro</a></button>
                    <p></p>
                </div>
                <label class="col-md-6 control-label" for=""></label>
                
                <div class="col-md-4">
                    <button id="" name="" class="btn btn-primary"><a style="color: white" href="{{ url('mis_libros/new/'.$libros->Id_libro) }}"> Nuevo capitulo</a></button>
                    <p></p>
                </div>
                <label class="col-md-6 control-label" for=""></label>

              </div>
                
                
        </div>
        @foreach ($capitulos as $cap)
            @if ($cap->Id_libro == $libros->Id_libro)
                
            
                
            
            <div class="media media-hover">
            <div class="media-body">
                <h4 class="media-heading"></h4>
                <div class="pull-left">
                    <strong>Capitulo: {{ $cap->n_cap }}</strong><br>
                </div>
                <p class="text-center pull-right">
                    <a href="{{ url('mis_libros/'.Auth::user()->id.'/'.$libros->Id_libro.'/'.$cap->Id_capitulo) }}" class="btn btn-info " style="margin-right: 10px;"><i class="zmdi zmdi-eye"></i></a>
                    <form action="{{ url('mis_libros/destroy/'.$cap->Id_capitulo) }}" method="post">
                    @csrf
                    <button class="btn btn-danger pull-right" class="btn btn-block" style="margin-right: 10px" type="submit"><i class="zmdi zmdi-delete"></i></button>
                    </form>
                </p>
            </div>
            
            </div>
            @endif
        @endforeach
        
           
              
              
        
      
        

            <div  class="text-justify lead">
                <div class="comments-container">
        <h1>Comentarios</h1>

        <ul id="comments-list" class="comments-list">
            @foreach ($comentarios as $com)
            @foreach ($lectores as $l)
                @if ($com['Id_user'] == $l['id'])
                    
                
            <li>
                <div class="comment-main-level" >
                    <!-- Avatar -->
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box" >
                        @if ($com['Id_tipo_com']==2)
                        <div class="comment-head" style="background-color: rgb(245, 118, 118)">
                        @else

                        <div class="comment-head" >
                        @endif
                            <h6 class="comment-name" ><a href="http://creaticode.com/blog">{{ $l['name'] }}</a></h6>
                            <span>Subido el:{{ $com['Fecha_com'] }}</span>        
                        
                        </div>
                        <div class="comment-content" >
                            {{ $com['texto'] }}
                        </div>
                    </div>
                </div>
                
            </li>
            @endif
            @endforeach
            @endforeach
        </ul>
    </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias
                        ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam
                        ipsa accusamus error. Animi mollitia corporis iusto.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
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