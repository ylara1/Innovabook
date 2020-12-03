<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Reportes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo hori 1.4.png" alt="Biblioteca" class="img-responsive center-box" style="width:95%;">
                </figure>
                
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="{{ url('mod/inicio') }}"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('mod/categoria') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('mod/nuevo_mod') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('mod/libros') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                            <li><a href=""><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Reportados <span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href=""><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Bloqueados</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Comentarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ url('mod/denuncia_comentarios') }}"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('mod/reportes') }}"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    <li><a href="{{ url('mod/configuraciones') }}"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">{{ Auth::user()->name }}</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
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
              <h1 class="all-tittles">Innovabook <small>Reportes y estadísticas</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab">Estadísticas</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="statistics">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="assets/img/chart.png" alt="chart" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de estadísticas, aquí puedes ver las diferentes estadísticas de los préstamos y libros.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        
                        <div class="page-header">
                          <h2 class="all-tittles">Visualizaciones <small>por mes</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">préstamos de estudiantes por mes</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Categoria</th>
                                                <th class="text-center">N. Visualizaciones</th>
                                                <th class="text-center">Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sección</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="page-header">
                          <h2 class="all-tittles">libros <small>por categorías</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">libros por categorías año 2016</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Categoría</th>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Total libros</th>
                                                <th class="text-center">Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nombre</td>
                                                <td>Código categoría</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total libros</th>
                                                <th class="text-center"></th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="bitacora">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="assets/img/user-sesion.png" alt="users-sesion" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de bitácora, aquí se muestran los registros de los últimos 15 usuarios (personal administrativo, docentes, administradores y estudiantes) que han iniciado sesión en el sistema. Recuerda eliminar los registros de la bitácora cada año para que el sistema funcione correctamente.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img src="assets/img/user01.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">1 - Nombre (Administrador)</h4>
                                    <p class="text-center">
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>7:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>  
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img src="assets/img/user02.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">2 - Nombre (Docente)</h4>
                                    <p class="text-center">
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>7:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img src="assets/img/user03.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">3 - Nombre (Estudiante)</h4>
                                    <p class="text-center">
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>7:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img src="assets/img/user05.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">4 - Nombre (Personal Ad.)</h4>
                                    <p class="text-center">
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>7:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>   
                        </section>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="reports">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="assets/img/pdf.png" alt="pdf" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de reportes, aquí puedes generar fichas de préstamos vacías de estudiantes, docentes o visitantes en formato pdf, también puedes generar reportes de inventario entre otros.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
                              <h2 class="all-tittles">fichas <small>vacías</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ficha estudiante</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ficha docente</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ficha personal administrativo</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ficha visitante</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="page-header">
                              <h2 class="all-tittles">reportes <small>generales</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Reporte General de Inventario</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Reporte Libros por Categoría</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Préstamos entregados (por usuarios)</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-trending-up zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Préstamos entregados (por sección)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="page-header">
                                <h2 class="all-tittles">reportes <small>devoluciones pendientes</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-calendar-close zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Docentes</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-calendar-close zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Personal Administrativo</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-calendar-close zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Estudiantes</h3>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-calendar-close zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Visitantes</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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