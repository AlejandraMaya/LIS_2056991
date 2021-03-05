<?php


  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prestamos</title>
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
  <?php


?>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-desktop"></i>INICIO </a>
                    </li>
                    <li class="menu-title">Administrar</li><!-- /.menu-title -->
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-list"></i>CRUDS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-user"></i><a href="control_administrador.php">Administradores</a></li>-->
                            <!--<li><i class="fas fa-users-cog"></i></i><a href="control_empleados.php">Empleados</a></li>-->
                            <li><i class="fa  fa-book"></i><a href="control_libros.php">Libros</a></li>
                            <li><i class="fa fa-users"></i><a href="control_personas.php">Personas</a></li>
                            <li><i class="fa fa-edit (alias)"></i><a href="control_solicitud.php">Registrar Solicitudes</a></li>
                            <li><i class="fa fa-check-square"></i><a href="control_prestamos.php">Control Prestamos</a></li>
                            <!--<li><i class="fa fa-group (alias)"></i><a href="control_usuarios.php">Usuarios</a></li>-->
                            <li><i class="fas fa-clipboard-list"></i><a href="ver_historial.php">Historial de prestamos</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-title">Extra</li><!-- /.menu-title -->

                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Más</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="extra_emple.php">Información</a></li>
                            
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
                  <a href="../controlador/cerrarsession.php" class="cerrar_sesion">Cerrar Sesión</a>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logo.png" alt="User Avatar">
                        </a>

                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Prestamos</strong>
                            </div>
                            <div class="card-body">
                            	<form id="frmEliminar" action="../controlador/eliminar.php" method="post">
<input type="hidden" name="id_prestamo" id="id_prestamo" value="">

<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><h5 id="titulo_eliminar"><i class="fas fa-times-circle"></i> Finalizar</h5></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>¿Estás seguro que deseas dar por finalizado este prestamo?</b>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-dark">Limpiar campos</button>
        <button type="submit" class="btn" id="boton_eliminar" name="eliminar_prestamo"><li class="fas fa-times"></li> Finalizar</button>
      </div>
    </div>
  </div>
</div>
</form>
    

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><h5 id="titulo_editar"><li class="fas fa-pencil-alt"></li> Editar Prestamo</h5></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

          

      <div class="modal-body">

        <form class="" id="frmEditar" action="../controlador/editar.php" method="post">

          <input type="text" hidden="" class="form-control" id="id_prestamo" name="id_prestamo" ><br>

          <div class="form-row">            
            <div class="col">
              <label for="id_usuario">Documento</label>
              <input type="number" class="form-control" id="id_usuario" name="id_usuario" placeholder="Editar Documento" required="" minlength="6" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
            </div>

            <div class="col">
              <label for="nombre_apellidos">Nombre y Apellidos</label>
            <input type="text" class="form-control" id="nombre_apellidos" name="nombre_apellidos" placeholder="Editar nombre y apellidos" required="" minlength="3" maxlength="60"><br>
          </div>
        </div>

          <div class="form-row">            
            <div class="col">       
              <label for="titulo_libro">Titulo del libro</label>  
            <input type="text"  class="form-control" id="titulo_libro" name="titulo_libro" placeholder="Editar titulo del libro" required=""><br>
          </div>

          <div class="col"> 
          <label for="fecha_salida">Fecha salida</label>
            <input type="text"  class="form-control" id="fecha_salida" name="fecha_salida" placeholder="Editar fecha de salida" required=""><br>
          </div>
        </div>

        
          <div class="form-row">            
            <div class="col">  
            <label for="fecha_entrega">Fecha entrega</label>
            <input type="text"  class="form-control" id="fecha_entrega" name="fecha_entrega" placeholder="Editar fecha de entrega" required=""><br>
          </div>          
            <div class="col">  
            <label for="unidades_prestadas">Cantidad de unidades prestadas</label>
            <input type="number"  class="form-control" id="unidades_prestadas" name="unidades_prestadas" placeholder="Editar las unidades prestadas" min="1" max="100"><br>
          </div>


            <div class="col">  
            <label for="estado_libros">Editar Estado en que se encontrará el libro</label>
            <select id="estado_libros" name="estado_libros" form="frmEditar">
              <option value="Disponible">Disponible</option>
              <option value="No Disponibke">No Disponible</option>
            </select><br>
           </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal" id="boton_cerrar">Cerrar</button>
        <button type="submit" class="btn" name="editar_prestamo" id="boton_editar"><li class="fas fa-check"></li> Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

          </form>

    <div class="container" style="margin-top: 40px;">
        <div class="row" >
            <div class="col-lg-12">
                <div class="table-responsive table-sm" id="c_tabla">
                    <table class="table table-striped table-hover" id="prestamos">
            <thead>
              <tr>
                <th>ACCIONES</th>
                <th>Identificacion usuario</th>
                <th>Nombre y Apellidos</th>
                <th>Titulo libro</th>
                <th>fecha_salida</th>
                <th>fecha_entrega</th>
                <th>Unidades prestadas</th>
                <th>Estado del libro</th>
              </tr>
            </thead>
          </table>

</div>
  </div>
    </div>
      </div>
                            </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

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

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--LO DE JUANJO-->
    <script type="text/javascript" src="../controlador/media/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../controlador/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="..controlador/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="../controlador/datatables/js/dataTables.bootstrap4.min.js"></script>
	
	

	<script src="../controlador/datatables/botones/js/dataTables.buttons.min.js"></script>
	<script src="../controlador/datatables/botones/js/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="../controlador/datatables/botones/jszip/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="../controlador/datatables/botones/pdfmake/pdfmake.min.js"></script>
	<script src="../controlador/datatables/botones/pdfmake/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="../controlador/datatables/botones/js/buttons.html5.min.js"></script>
  	<script src=" https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>

  	<!--NO SIRVE JUANJO
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  	-->

	<script type="text/javascript">
		$(document).ready(function(){

      listar();

      });

    var listar =function(){

      var table = $('#prestamos').DataTable({


        
        "bDeferRender": true,
        "ordering":  false,
        "sPaginationType": "full_numbers",

        "ajax":{

          "method":"POST",
          "url":"../controlador/traer_datos_prestamos.php"


          },
          
          "columns":[

          {"defaultContent": "<div class='btn-group'> <button class='editar btn btn-sm' data-toggle='modal' data-target='#modalEditar' id='boton_editar'><li class='far fa-edit'>Editar</button><button class='eliminar btn btn-sm' data-toggle='modal' data-target='#modalEliminar' id='boton_eliminar'><li class='far fa-trash-alt'> Finalizar</li></button></div>"},

          
          {"data":"id_usuario"},
          {"data":"nombre_apellidos"},
          {"data":"titulo_libro"},
          {"data":"fecha_salida"},
          {"data":"fecha_entrega"},
          {"data":"unidades_prestadas"},
          {"data":"estado_libros"}

        ],
        select: true,

        "language": idioma_espanol,

        dom: 'Bfrtip',

            lengthMenu: [
                [ 10, 50, 100,500,1000 ],
                [ '10 filas', '50 filas', '100 filas','500 filas', '1000 filas']
            ],

        "buttons":[

                {
                    extend:    'pdfHtml5',
                    text:      '<i class="far fa-file-pdf icono_exportacion"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: "btn btn-dark boton_exportacion",
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },

                {
                    extend:    'excelHtml5',
                    text:      '<i class="far fa-file-excel icono_exportacion"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: "btn btn-dark boton_exportacion"
                },

                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv icono_exportacion"></i>',
                    titleAttr: 'Exportar a CSV',
                    className: "btn btn-dark boton_exportacion"
                },


              {   

                
                  extend: 'pageLength',
                  text: 'Cantidad de filas a observar',
                  className: "btn btn-sm btn-outline-secondary boton_longitud"
                }

        ]
              
    });

      $.fn.dataTable.ext.errMode = 'throw';
      obtener_data_editar("#prestamos tbody", table);
      obtener_id_eliminar("#prestamos tbody", table);

}


        var obtener_data_editar=function(tbody, table){

          $(tbody).on("click","button.editar", function(){
            var data = table.row( $(this).parents("tr") ).data();

            var id_prestamo=$("#frmEditar #id_prestamo").val(data.id_prestamo),
              id_usuario=$("#frmEditar #id_usuario").val(data.id_usuario),
              nombre_apellidos=$("#frmEditar #nombre_apellidos").val(data.nombre_apellidos),
              titulo_libro=$("#frmEditar #titulo_libro").val(data.titulo_libro),
              fecha_salida=$("#frmEditar #fecha_salida").val(data.fecha_salida),
              fecha_entrega=$("#frmEditar #fecha_entrega").val(data.fecha_entrega),
              unidades_prestadas=$("#frmEditar #unidades_prestadas").val(data.unidades_prestadas),
              estado_libros=$("#frmEditar #estado_libros").val(data.estado_libros);


            

          });
        }

        var obtener_id_eliminar=function(tbody, table){

          $(tbody).on("click","button.eliminar", function(){
            var data = table.row( $(this).parents("tr") ).data();

            var id_prestamo=$("#frmEliminar #id_prestamo").val(data.id_prestamo);

          });
        }




        var idioma_espanol = {

                                  select: {
                           rows: {
                               _: "Has seleccionado %d filas",
                              0: "Has click en una fila para seleccionarla",
                              1: "Solo 1 fila seleccionada"
                       }
                   },
                   
                  "sProcessing":     "Procesando...",
                  "sLengthMenu": '<b><i class="far fa-eye"></i> Mostrar</b> <select>'+
                      '<option value="10">10</option>'+
                      '<option value="50">50</option>'+
                      '<option value="100">100</option>'+
                      '<option value="500">500</option>'+
                      '<option value="1000">1000</option>'+
                      '</select> <b>registros</b>',    
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando del (_START_ al _END_) <br>de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "<b><i class='fas fa-search'></i> Buscar:</b>",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  }
                  }



  </script>


</body>
</html>
