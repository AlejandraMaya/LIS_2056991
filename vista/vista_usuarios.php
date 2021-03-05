<!DOCTYPE html>
<html lang="es">

<title>Libros_Materiales</title>
<?php include('head_lis.php') ?>

<body>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Todos los libros</strong>
                            </div>
                            <div class="card-body">
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="table-responsive table-sm" id="c_tabla">
                    <table class="table table-striped table-hover" id="libros">

                      <!--<a href="vista_usuarios_libros_prestados.php"><button class="btn boton_vista_usuarios">Ver los libros que ESTÁN prestados</button></a>-->

            <thead>
              <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Numero de paginas</th>
                <th>Nota general</th>
                <th>Materia</th>
                <th>Editorial</th>
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

        <?php include('footer_lis.php') ?>

    </div>


	<script type="text/javascript">
		$(document).ready(function(){

      listar();

      });
    var listar =function(){

      var table = $('#libros').DataTable({

        "bDeferRender": true,
        "ordering":  false,
        "sPaginationType": "full_numbers",

        "ajax":{

          "method":"POST",
          "url":"../controlador/traer_datos.php"

          },
          
          "columns":[


          {"data":"titulo"},
          {"data":"autor"},
          {"data":"numero_paginas"},
          {"data":"nota_general"},
          {"data":"materia"},
          {"data":"editorial"}

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
      


}

        $.fn.dataTable.ext.errMode = 'throw';
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
