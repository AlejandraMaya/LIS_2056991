<?php
?>

<!DOCTYPE html>
<html lang="es">
<title>Alumnos</title>
<?php include('head_lis.php') ?>

<body>
  <!-- Right Panel -->
    <div class="content">
      <div class="row">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Usuario/Alumnos</strong>
                </div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="profes">
                          <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-usuario" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Alumno</button>
                            <thead>
                              <tr>
                                <th>Identificación</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th><i class="fas fa-edit"></i> | <i class="far fa-file-alt"></i> | <button type="button" class="btn btn-success btn-sm">Activado</button></th>
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

          <?php include('footer_lis.php') ?>

    <!--Agregar Usuario-->
            <div class="modal fade" id="modalAgregar-usuario" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Alumno<h5></div>
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
                    </div>
                </div>
            </div>
    

</body>
</html>
