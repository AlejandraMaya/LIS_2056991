<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acciones</title>

    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><i class="menu-icon fa fa-desktop"></i>INICIO </a>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <ul class="sub-menu children dropdown-menu">
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Más Opciones</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="#">no ce sabe</a></li>
                            <li><i class="fa fa-table"></i><a href="#">xdxdxd</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

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
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logo.png" alt="User Avatar">
                        </a>

                    </div>
                </div>
            </div>
        </header>
    

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Acciones</strong>
                            </div>

                            <div class="card-body">
                                <div class="container">
                                    <div class="row" >
                                        <div class="">
                                            
                                            <!-- Agregar Administrador -->
                                            <div class="modal fade" id="modalAgregar-administrador" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Administrador<h5></div>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form class="" id="frmAgregar" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="nombre_admin">Nombre del administrador</label>
                                                                        <input type="text" class="form-control" id="nombre_admin" name="nombre_admin" placeholder="Insertar nombre" required="" minlength="3" maxlength="30"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="apellido_admin">Apellidos del administrador</label>
                                                                        <input type="text" class="form-control" id="apellido_admin" name="apellido_admin" placeholder="Insertar apellidos" required="" minlength="3"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">       
                                                                        <label for="telefono_admin">Teléfono del administrador</label>  
                                                                        <input type="text"  class="form-control" id="telefono_admin" name="telefono_admin" placeholder="Insertar teléfono" required="" minlength="6" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="correo_admin">Correo del administrador</label>
                                                                        <input type="email"  class="form-control" id="correo_admin" name="correo_admin" placeholder="Insertar correo" required="" maxlength="50"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">  
                                                                        <label for="nombre_org">Nombre de la organización</label>
                                                                        <input type="text"  class="form-control" id="nombre_org" name="nombre_org" placeholder="Insertar nombre de la organización" required="" minlength="6" maxlength="30" ><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="direccion_org">Direccion de la organización</label>
                                                                        <input type="text"  class="form-control" id="direccion_org" name="direccion_org" placeholder="Insertar dirección de la organización" required="" minlength="5" maxlength="30"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">  
                                                                        <label for="telefono_org">Teléfono de la organización</label>
                                                                        <input type="text"  class="form-control" id="telefono_org" name="telefono_org" placeholder="Insertar teléfono de la organización" required="" minlength="6" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="nit_org">Nit de la organización</label>
                                                                        <input type="text"  class="form-control" id="nit_org" name="nit_org" placeholder="Insertar nit de la organización" required="" minlength="8" maxlength="15"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">  
                                                                        <label for="correo_org">Correo de la organización</label>
                                                                        <input type="email"  class="form-control" id="correo_org" name="correo_org" placeholder="Insertar correo de la organización" maxlength="50"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="dane_org">Dane de la organización</label>
                                                                        <input type="text"  class="form-control" id="dane_org" name="dane_org" placeholder="Insertar dane de la organización" required="" minlength="5" maxlength="15"><br>
                                                                    </div>
                                                                </div>
                                                        </div>
      
                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-dark">Limpiar campos</button>       
                                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2"><li class="fas fa-plus"></li> Agregar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Agregar Empleado-->
                                            <div class="modal fade" id="modalAgregar-empleado" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Empleado<h5></div>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

          
                                                        <div class="modal-body">
                                                            <form class="" id="frmAgregar" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="nombre_empleado">Nombre</label>
                                                                        <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" placeholder="Insertar nombre" minlength="3" maxlength="30" required=""><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="apellido_empleado">Apellidos</label>
                                                                        <input type="text" class="form-control" id="apellido_empleado" name="apellido_empleado" placeholder="Insertar apellidos" required="" minlength="3" maxlength="30"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">       
                                                                        <label for="correo_empleado">Correo</label> 
                                                                        <input type="email"  class="form-control" id="correo_empleado" name="correo_empleado" placeholder="Insertar correo del empleado" required="" maxlength="50"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="direccion">Dirección</label>
                                                                        <input type="text"  class="form-control" id="direccion" name="direccion_empleado" placeholder="Insertar dirección" maxlength="30"><br>
                                                                    </div>
                                                                </div>

        
                                                                <div class="form-row">            
                                                                    <div class="col">  
                                                                        <label for="documento">Documento</label>
                                                                        <input type="text"  class="form-control" id="documento" name="documento" placeholder="Insertar documento" required="" minlength="6" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
                                                                    </div>

                                                                    <div class="col">  
                                                                        <label for="contraseña_empleado">Contraseña</label>
                                                                        <input type="text"  class="form-control" id="contraseña_empleado" name="contraseña_empleado" placeholder="Insertar contraseña" required="" minlength="9" maxlength="20"><br>
                                                                    </div>
                                                                </div>


                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-dark">Limpiar campos</button>        
                                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2"><li class="fas fa-plus"></li> Agregar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Agregar Libro-->
                                            <div class="modal fade" id="modalAgregar-libro" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Libro<h5></div>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form class="" id="frmAgregar" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="clasificacion">Clasificación</label>
                                                                        <input type="text" class="form-control" id="clasificacion" name="clasificacion" placeholder="Insertar Clasificación" maxlength="20"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="isbn">ISBN</label>
                                                                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Insertar ISBN" required="" minlength="5" maxlength="15" ><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">       
                                                                        <label for="titulo">Titulo</label>  
                                                                        <input type="text"  class="form-control" id="titulo" name="titulo" placeholder="Insertar Titulo" required="" minlength="4" maxlength="50"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="autor">Autor</label>
                                                                        <input type="text"  class="form-control" id="autor" name="autor" placeholder="Insertar Autor" required="" minlength="3" maxlength="30"><br>
                                                                    </div>
                                                                </div>

        
                                                                <div class="form-row">            
                                                                    <div class="col">  
                                                                    <label for="autorc">Autor corporativo</label>
                                                                    <input type="text"  class="form-control" id="autorc" name="autorc" placeholder="Insertar Autor corporativo" maxlength="30"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="nombre_conferencia">Nombre de conferencia</label>
                                                                        <input type="text"  class="form-control" id="nombre_conferencia" name="nombre_conferencia" placeholder="Insertar Nombre de conferencia" maxlength="20"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col"> 
                                                                        <label for="edicion">Edición</label>
                                                                        <input type="text"  class="form-control" id="edicion" name="edicion"  placeholder="Insertar Edición" maxlength="10"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="ciudad">Ciudad</label>
                                                                        <input type="text"  class="form-control" id="ciudad" name="ciudad" placeholder="Insertar Ciudad" required="" minlength="5" maxlength="20" ><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col"> 
                                                                        <label for="editorial">Editorial</label>
                                                                        <input type="text"  class="form-control" id="editorial" name="editorial" placeholder="Editorial" required="" minlength="3" maxlength="10"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="año_publicacion">Año de publicación</label>
                                                                        <input type="number"  class="form-control" id="año_publicacion" name="año_publicacion" placeholder="Insertar Año" required="" min="1700" max="2100"></label><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col"> 
                                                                        <label for="numero_paginas">Número de paginas</label>
                                                                        <input type="number"  class="form-control" id="numero_paginas" name="numero_paginas"  placeholder="Insertar Número de paginas" required="" min="2" max="5000"></label><br>
                                                                    </div>
          
                                                                    <div class="col">       
                                                                        <label for="serie">Serie</label>
                                                                        <input type="text"  class="form-control" id="serie" name="serie" placeholder="Insertar Serie" maxlength="15"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="nota_general">Nota general</label>
                                                                        <input type="text"  class="form-control" id="nota_general" name="nota_general" placeholder="Insertar Nota general" maxlength="100"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="materia">Materia</label>
                                                                        <input type="text"  class="form-control" id="materia" name="materia" placeholder="Insertar Materia" required="" minlength="5" maxlength="20"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="coautores">Coautores</label>
                                                                        <input type="text" class="form-control" id="coautores" name="coautores" placeholder="Insertar Coautores" maxlength="30"></label><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="vol_nro_tomo_parte_ej">Vol_Nro_Tomo_Parte_Ej</label>
                                                                        <input type="text"  class="form-control" id="vol_nro_tomo_parte_ej" name="vol_nro_tomo_parte_ej" placeholder="Insertar Vol_Nro_Tomo_Parte_Ej" maxlength="15"></label><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="biblioteca">Biblioteca</label>
                                                                        <input type="text"  class="form-control" id="biblioteca" name="biblioteca" placeholder="Insertar Biblioteca" required="" minlength="6" maxlength="30"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="coleccion_ubicacion">Colección</label>
                                                                        <input type="text"  class="form-control" id="coleccion_ubicacion" name="coleccion_ubicacion" placeholder="Insertar Colección" maxlength="20"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="tipo_material">Material</label>
                                                                        <input type="text"  class="form-control" id="tipo_material" name="tipo_material" placeholder="Insertar Material" maxlength="20" pattern="[A-Za-z]+" title="Solo se permiten letras"><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="inv_raiz">Inv.Raiz</label>
                                                                        <input type="text"  class="form-control" id="inv_raiz" name="inv_raiz" placeholder="Insertar Inv.Raiz" maxlength="20"><br>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-dark">Limpiar campos</button>        
                                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2"><li class="fas fa-plus"></li> Agregar</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Agregar Material-->
                                            <div class="modal fade" id="modalAgregar-material" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Material<h5></div>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

          
                                                        <div class="modal-body">
                                                            <form class="" id="frmAgregar" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="material">Titulo Material</label>
                                                                        <input type="text" class="form-control" id="material" name="material" placeholder="Insertar nombre del material" minlength="3" maxlength="30" required=""><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="estado">Estado</label>
                                                                        <input type="text" class="form-control" id="Estado" name="Estado" placeholder="Insertar estado del material" required="" minlength="3" maxlength="30"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">       
                                                                        <label for="categoria">Categoria</label> 
                                                                        <input type="email"  class="form-control" id="Categoria" name="Categoria" placeholder="Insertar categoria del material" required="" maxlength="50"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="Descripción">Descripción</label>
                                                                        <input type="text"  class="form-control" id="Descripción" name="Descripción" placeholder="Insertar descripción del material" maxlength="30"><br>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-dark">Limpiar campos</button>        
                                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2"><li class="fas fa-plus"></li> Agregar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Agregar Usuario-->
                                            <div class="modal fade" id="modalAgregar-usuario" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Persona<h5></div>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form class="" id="frmAgregar" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                                                                <div class="form-row">            
                                                                    <div class="col">
                                                                        <label for="nombre_usuario">Nombre de usuario</label>
                                                                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Insertar nombre" required="" minlength="3" maxlength="30" ><br>
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="apellido_usuario">Apellidos de usuario</label>
                                                                        <input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" placeholder="Insertar apellidos" required="" minlength="3" maxlength="30"><br>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">            
                                                                    <div class="col">       
                                                                        <label for="correo_usuario">Correo Usuario</label>  
                                                                        <input type="email"  class="form-control" id="correo_usuario" name="correo_usuario" placeholder="Insertar correo" required="" maxlength="50"><br>
                                                                    </div>

                                                                    <div class="col"> 
                                                                        <label for="telefono_usuario">Telefono Usuario</label>
                                                                        <input type="text"  class="form-control" id="telefono_usuario" name="telefono_usuario" placeholder="Insertar teléfono" required="" minlength="5" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn" data-dismiss="modal" id="boton_cerrar">Cerrar</button>    
                                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2"><li class="fas fa-plus"></li> Agregar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                                <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-administrador" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Administrador</button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-empleado" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Empleado</button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-libro" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Libro</button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-material" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Material</button>
                                                <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-usuario" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar usuario</button>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="site-footer">
                                <div class="footer-inner bg-white">
                                    <div class="row">
                                        <div class="col-sm-6">Copyright &copy; 2019 Loan and Inventory</div>
                                        <div class="col-sm-6 text-right">Desarrollado por <a href="https://pornhub.com">KingSoft</a></div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script type="text/javascript" src="../controlador/media/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
