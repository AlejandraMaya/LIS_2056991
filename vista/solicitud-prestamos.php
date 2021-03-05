<?php
?>

<!DOCTYPE html>
<html lang="es">
<title>Préstamos</title>
<?php include('head_lis.php') ?>

<body>

  <!-- Right Panel -->


  <div class="content">
    <div class="animated fadeIn">


      <div class="row">

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Solicitud de préstamos</strong>
                </div>

                <div class="card-body">



                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="libros">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn" onclick="location.href='registrar-pres.php'" id="boton_agregar">
                              Buscar
                            </button>

                            <thead>
                              <tr>
                                <th>Documento</th>
                                <th>Nombre</th> 
                                <th>Fecha solicitud</th>
                                <th>Tipo de prestamo</th>   
                                <th><button type="button" onclick="location.href='registrar-pres.php'" class="btn btn-success btn-sm">Asiganar préstamo</button></th>  
                                <th><button type="button" class="btn btn-danger btn-sm">Eliminar</button></th>                        
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



          </div>

          <!-- MATERIALESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Préstamo de materiales</strong>
                </div>

                <div class="card-body">

                <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="libros">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn" onclick="location.href='registrar-pres.php'" id="boton_agregar">
                      
                              Buscar préstamo
                            </button>

                            <thead>
                              <tr>
                                <th>Usuario</th>
                                <th>Fecha préstamo</th> 
                                <th>Estado</th>
                                <th>Notas</th>   
                                <th><button type="button" class="btn btn-success btn-sm">Ver detalle</button></th>  
                                <th><button type="button" class="btn btn-danger btn-sm">Eliminar</button></th>                        
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


          </div>
        </div>





        <?php include('footer_lis.php') ?>


</body>

</html>