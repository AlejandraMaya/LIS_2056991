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

      <ul class="nav nav-pills mb-3 nav justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Libro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Material</a>
        </li>
      </ul>

      <div class="row">

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Libros activos</strong>
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

          <!-- MATERIALESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Materiales activos</strong>
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