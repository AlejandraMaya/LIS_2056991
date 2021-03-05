<!DOCTYPE html>
<html lang="es">
<title>Asignar préstamo</title>
<?php include('head_lis.php') ?>

<body>
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="bg-white">
                <div class="container">

                
                  <form class="" id="frmAgregar" action="#" method="post">

                    <div class="form-row">
                      <div class="col">
                        <label for="titulo">Fecha préstamo</label>
                        <input type="date" class="form-control" id="titulo" name="titulo" placeholder="Inserte fecha" required="" minlength="4" maxlength="50"><br>
                      </div>

                      <div class="col">
                        <label for="autor">Nombres</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Insertar nonbre" required="" minlength="3" maxlength="30"><br>

                      </div>


                    </div>

                    <div class="form-row">
                      <div class="col">
                        <label for="numero_paginas">Documento</label>
                        <input type="text" class="form-control" id="numero_paginas" name="numero_paginas" placeholder="Insertar documento" required="" min="2" max="5000"></label><br>
                      </div>

                      
                      <div class="col">
                        
                        <div class="form-row">
      
                        <label for="titulo">Fecha devolución</label>
                        <input type="date" class="form-control" id="titulo" name="titulo" placeholder="Inserte fecha" required="" minlength="4" maxlength="50"><br>
                      </div>
                      </div>

                    </div>

                    
                    <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="libros">

                            <!-- Button trigger modal -->
                    

                            <thead>
                              <tr>
                                <th>Titulo Material</th>
                                <th>Descripcion </th>
                                <th>Categoria</th>
                                
                              </tr>
                            </thead>
                          </table>

                        </div>
                      </div>
                    </div>
                  </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn" onclick="location.href='registrar_Material.php'" id="boton_agregar">
                       Limpiar campos
                    </button>
                      <button type="submit" class="btn" onclick="location.href='registrar-pres.php'" id="boton_agregar">
                      <li class="far fa-plus-square"></li> Asignar préstamo
                    </button>

                    </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  </div>

</body>

</html>