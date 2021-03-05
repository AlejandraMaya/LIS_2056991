<!DOCTYPE html>
<html lang="es">
<title>Usuario</title>
<?php include('head_lis.php') ?>
<?php 
include '../controlador/conexion.php';
?>

<body>
  <!-- Right Panel -->
    <div class="content">
      <div class="row">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Usuario</strong>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-responsive table-hover" id="vista_prestamos">
                          <button type="button" class="btn" data-toggle="modal" data-target="#modalAgregar-usuario" id="boton_agregar"><li class="far fa-plus-square"></li> Agregar Usuario</button>
                            <thead>
                              <tr>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Tipo</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              try {
                                $sql= "SELECT Id_Documento,Nombres,Apellidos,Telefono,Correo,Estado,Tipo_Documento,rol.Tipo_Rol";
                                $sql .= " FROM usuario";
                                $sql .= " INNER JOIN rol";
                                $sql .= " ON usuario.Id_Rol=rol.Id_Rol";
                                $resultado = $conexion->query($sql) or die($conexion->error);
                              } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                              }
                              while($filas=mysqli_fetch_array($resultado)){
                              ?>
                              <tr>
                                <td><?php echo $filas['Id_Documento']?></td>
                                <td><?php echo $filas['Nombres']?></td>
                                <td><?php echo $filas['Apellidos']?></td>
                                <td><?php echo $filas['Telefono']?></td>
                                <td><?php echo $filas['Correo']?></td>
                                <td><?php echo $filas['Estado']?></td>
                                <td><?php echo $filas['Tipo_Documento']?></td>
                                <td><?php echo $filas['Tipo_Rol']?></td>
                                <td>
                                  <a href="editar-producto.php?id=<?php echo $producto['id_producto'] ?>" class="btn btn-info btn-circle">
                                    <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <a href="eliminar-producto.php?id=<?php echo $producto['id_producto'] ?>" data-tipo="producto" class="btn btn-danger btn-circle margin">
                                    <i class="fa fa-trash"></i>
                                  </a>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
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
                            <div class="modal-title"><h5 id="titulo_agregar"><li class="fas fa-plus-circle"></li> Agregar Usuario<h5></div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form class="" id="frmAgregar" name="guardar-registro" action="../controlador/modulo-usuario.php" method="post">
                                <div class="form-row">   
                                    <div class="col">
                                        <label for="documento">Documento</label>
                                        <input type="text" class="form-control" id="Id_Documento" name="Id_Documento" placeholder="Insertar Documento" required="" minlength="3" maxlength="30" ><br>
                                    </div>

                                    <div class="col">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Insertar nombres" required="" minlength="3" maxlength="30" ><br>
                                    </div>

                                    <div class="col">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Insertar apellidos" required="" minlength="3" maxlength="30"><br>
                                    </div>
                                  </div>
                                  <div class="form-row">

                                  <div class="col"> 
                                        <label for="telefono">Telefono</label>
                                        <input type="text"  class="form-control" id="Telefono" name="Telefono" placeholder="Insertar teléfono" required="" minlength="5" maxlength="15" title="Solo se permiten números" pattern="[0-9]+"><br>
                                  </div>

                                              
                                    <div class="col">       
                                        <label for="correo">Correo</label>  
                                        <input type="email"  class="form-control" id="Correo" name="Correo" placeholder="Insertar correo" required="" maxlength="50"><br>
                                  </div>

                                    
                                  <div class="col"> 
                                        <label for="estado">Estado</label>
                                        <input type="text"  class="form-control" id="Estado" name="Estado" placeholder="Insertar Estado" required="" minlength="5" maxlength="15"><br>
                                  </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="col">
                                      <label for="autorc">Tipo Documento</label>
                                      <select class="form-control" id="Tipo_Documento" name="Tipo_Documento"  minlength="3" maxlength="20">
                                      <option selected>...</option>
                                      <option>C.C</option>
                                      <option>T.I</option>
                                      </select>
                                    </div>
                                  
                                    <div class="col">
                                      <label for="autorc">Rol</label>
                                      <select class="form-control" id="Rol" name="Rol"  minlength="3" maxlength="20">
                                      <option value="0">-- Rol --</option>
                                      <?php
                                        try{
                                          $sql = "SELECT Id_Rol,Tipo_Rol FROM rol ";
                                          $resultado = $conexion->query($sql);
                                          while($rol = $resultado->fetch_assoc()){ ?>
                                            <option value="<?php echo $rol['Id_Rol']; ?>">
                                            <?php echo $rol['Tipo_Rol']; ?>
                                          </option>
                                        <?php    }
                                          } catch(Exception $e){
                                            echo "Error: " . $e->getMessage();
                                            } 
                                        ?>
                                        </select>
                                    </div>

                                    </div>
                                                    
                                    <div class="modal-footer">
                                      <button type="button" class="btn" data-dismiss="modal" id="boton_cerrar">Cerrar</button>  
                                      <input type="hidden" name="registro" value="nuevo">  
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
