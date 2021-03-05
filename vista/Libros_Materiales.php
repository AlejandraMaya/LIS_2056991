<?php
?>

<!DOCTYPE html>
<html lang="es">
<title>Libros Y Materiales</title>
<?php include('head_lis.php') ?>
<?php 
include '../controlador/conexion.php';
?>
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
                  <strong class="card-title">Libros</strong>
                </div>

                <div class="card-body">



                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-responsive table-hover" id="libros">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn" onclick="location.href='Registrar_Libro.php'" id="boton_agregar">
                              <li class="far fa-plus-square"></li> Agregar Libro
                            </button>

                            <thead>
                              <tr>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Editorial</th>
                                <th>Año Edición</th>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              try {
                                $sql= "SELECT Id_Libros,autor.Nombre_Autor,editorial.Nombre_Editorial,categoria_libro.Nombre_categoria,";
                                $sql .= "Titulo,N_paginas,Año_edicion,Estado FROM libros ";
                                $sql .= "inner join autor on libros.Id_Autor= autor.Id_Autor ";
                                $sql .= "inner join editorial  on libros.Id_Editorial= editorial.Id_Editorial ";
                                $sql .= "inner join categoria_libro on libros.Id_Categoria_libro = categoria_libro.Id_Categoria_libro";
                                $resultado = $conexion->query($sql) or die($conexion->error);
                              } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                              }
                              while($filas=mysqli_fetch_array($resultado)){
                              ?>
                              <tr>
                                <td><?php echo $filas['Titulo']?></td>
                                <td><?php echo $filas['Nombre_Autor']?></td>
                                <td><?php echo $filas['Nombre_Editorial']?></td>
                                <td><?php echo $filas['Año_edicion']?></td>
                                <td><?php echo $filas['Nombre_categoria']?></td>
                                <td><?php echo $filas['Estado']?></td>
                                <td><button type="button" class="btn btn-success btn-sm ">Inhabilitar</button><h1> </h1><button type="button" class="btn btn-success btn-sm">Detalle</button></td>
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

          <!-- MATERIALESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Materiales</strong>
                </div>

                <div class="card-body">

                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-responsive table-hover" id="libros">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn" onclick="location.href='Registrar_Material.php'" id="boton_agregar">
                              <li class="far fa-plus-square"></li> Agregar Material
                            </button>

                            <thead>
                              <tr>
                                <th>Titulo Material</th>
                                <th>Descripcion </th>
                                <th>Categoria</th>
                                <th>Estado</th>
                                <th> </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              try {
                                $sql= "SELECT `Id_Materiales`,categoria_materiales.Nombre_Categoria_Materiales,`Nombre`,`Descripcion`,`Estado` From materiales ";
                                $sql .= " inner join categoria_materiales on materiales.Id_Materiales = categoria_materiales.Id_Categoria_Materiales ";
                                $resultado = $conexion->query($sql) or die($conexion->error);
                              } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                              }
                              while($filas=mysqli_fetch_array($resultado)){
                              ?>
                              <tr>
                                <td><?php echo $filas['Nombre']?></td>
                                <td><?php echo $filas['Descripcion']?></td>
                                <td><?php echo $filas['Nombre_Categoria_Materiales']?></td>
                                <td><?php echo $filas['Estado']?></td>
                                <td><button type="button" class="btn btn-success btn-sm ">Inhabilitar</button><h1> </h1><button type="button" class="btn btn-success btn-sm">Detalle</button></td>
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
        </div>





        <?php include('footer_lis.php') ?>


</body>

</html>