<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Extra</title>
    <meta name="description" content="LIS">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="icon" type="image/png" href="logo.png "/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


</head>

<body>
    <!-- Left Panel -->
  <?php

?>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a><i class="menu-icon fa fa-desktop"></i>I.E SAN CRISTÓBAL</a>
                    </li>
                    <li class="menu-title">Administrar</li><!-- /.menu-title -->
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-list"></i>CRUDS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="control_administrador.php">Administradores</a></li>
                            <li><i class="fas fa-users-cog"></i></i><a href="control_empleados.php">Empleados</a></li>
                            <!--<li><i class="fa  fa-book"></i><a href="control_libros.php">Libros</a></li>-->
                            <!--<li><i class="fa fa-users"></i><a href="control_personas.php">Personas</a></li>-->
                            <!--<li><i class="fa fa-check-square"></i><a href="control_prestamos.php">Prestamos</a></li>-->
                            <li><i class="fa fa-group (alias)"></i><a href="control_usuarios.php">Usuarios</a></li>
                            <!--<li><i class="fa fa-edit (alias)"></i><a href="control_solicitud.php">Solicitudes</a></li>-->
                            <!--<li><i class="fas fa-clipboard-list"></i><a href="ver_historial.php">Historial de prestamos</a></li>-->

                        </ul>
                    </li>

                    
                    <li class="menu-title">Extra</li><!-- /.menu-title -->

                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-info"></i>Más</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="menu-icon fa fa-bar-chart-o"></i><a href="extra.php">Información</a></li>
                            
                        </ul>
                    </li>

                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="fondo-imagen" style="width: 80%;  font-family: 'Open Sans';color: #41434d;font-family: 'Open Sans';font-weight: 700;font-size: 13px;"><img src="images/logo.png" alt="Logo" style="width: 15%;">       Loan and Inventory Software</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                  <a href="../controlador/cerrarsession_admin.php" class="cerrar_sesion">Cerrar Sesión</a>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logo.png" alt="User Avatar">
                        </a>

                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Breadcrumbs-->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Información Extra</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6" >
                        <div class="card" style="background-color: pink; height: 320px; width: 100%;">
                            <div class="card-body">
                                <h4 class="mb-3">Libros</h4>
                                <?php 

            include("../controlador/conexion.php");

            $sql = "SELECT * FROM libros";
            $resultado= mysqli_query($conexion,$sql);
            $num_filas= mysqli_num_rows($resultado);

            echo "<p>El numero de libros es</p><br>" . $num_filas;

     ?>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card" style="background-color: orange; height: 320px; width: 100%; ">
                            <div class="card-body">
                                <h4 class="mb-3">Personas</h4>
                                <?php


            include("../controlador/conexion.php");

            $sql2 = "SELECT * FROM personas";
            $resultado2= mysqli_query($conexion,$sql2);
            $num_filas2= mysqli_num_rows($resultado2);

            echo "<p>El numero de personas registradas en el sistema es</p><br>" . $num_filas2;


      ?>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="background-color: red; height: 320px; width: 100%;">
                            <div class="card-body">
                                <h4 class="mb-3">Empleados</h4>
                                <?php

            include("../controlador/conexion.php");

            $sql3 = "SELECT * FROM empleado";
            $resultado3= mysqli_query($conexion,$sql3);
            $num_filas3= mysqli_num_rows($resultado3);

            echo "<p>El numero de empleados es</p>" . $num_filas3;







      ?>

                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card" style="background-color: green; height: 320px; width: 100%;">
                            <div class="card-body">
                                <h4 class="mb-3">Préstamos</h4>
                                <?php

            include("../controlador/conexion.php");

            $sql4 = "SELECT * FROM prestamos";
            $resultado4= mysqli_query($conexion,$sql4);
            $num_filas4= mysqli_num_rows($resultado4);

            echo "<p><br>El numero de prestamos vigentes son</p>" . $num_filas4;


      ?>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->
                </div><!-- /# row -->
            </div><!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Loan and Inventory
                    </div>
                    <div class="col-sm-6 text-right">
                        Desarrollado por <a href="https://pornhub.com">KingSoft</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/excanvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.time.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.stack.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.resize.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.crosshair.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot.curvedlines@1.1.1/curvedLines.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot.tooltip@0.9.0/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/init/flot-chart-init.js"></script>
    <!--  Chart js
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>-->
</body>
</html>
