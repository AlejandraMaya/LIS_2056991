<!DOCTYPE html>
<html lang="es">
<title>Bienvenido a LIS</title>
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
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insertar Titulo" required="" minlength="4" maxlength="50"><br>
                      </div>

                      <div class="col">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Insertar Autor" required="" minlength="3" maxlength="30"><br>

                      </div>

                      <div class="col">
                        <label for="autor" style="color: white;">Autor</label>
                        <select class="form-control" id="Categoria" name="Categoria" maxlength="30">
                          <option selected>Escoje...</option>
                          <option>Bombo</option>
                          <option>Marquez</option>
                        </select>
                      </div>

                    </div>



                    <div class="form-row">
                      <div class="col">
                        <label for="numero_paginas">N° de paginas</label>
                        <input type="number" class="form-control" id="numero_paginas" name="numero_paginas" placeholder="Insertar Número de paginas" required="" min="2" max="5000"></label><br>
                      </div>

                      <div class="col">
                        <label for="editorial">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial" required="" minlength="3" maxlength="10"><br>
                      </div>

                      <div class="col">
                        <label for="autorc" style="color: white;">Editorial</label>
                        <select class="form-control" id="editorial" name="editorial" maxlength="30">
                          <option selected>Escoje...</option>
                          <option>Colorin</option>
                          <option>Colorado</option>
                        </select>
                      </div>

                    </div>

                    <div class="form-row">

                      <div class="col">
                        <label for="edicion">Edición</label>
                        <input type="text" class="form-control" id="edicion" name="edicion" placeholder="Insertar Edición" maxlength="10"><br>
                      </div>

                      <div class="col">
                        <label for="año_publicacion">Año de edición</label>
                        <input type="number" class="form-control" id="año_edicion" name="año_edicion" placeholder="Insertar Año" required="" min="1700" max="2100"></label><br>
                      </div>
                    </div>


                    <div class="form-row">
                      <div class="col">
                        <label for="autorc">Categoria</label>
                        <select class="form-control" id="Categoria" name="Categoria" maxlength="30">
                          <option selected>Escoje...</option>
                          <option>Español</option>
                          <option>Ingles</option>
                        </select>
                      </div>

                      <div class="col">
                        <label for="Estado">Estado</label>
                        <select class="form-control" id="Estado" name="Estado" maxlength="20">
                          <option selected>Escoje...</option>
                          <option>Activado</option>
                          <option>Inhabilitado</option>
                        </select>
                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-dark">Limpiar campos</button>
                      <button type="submit" class="btn" name="agregar" id="boton_agregar_1">
                        <li class="fas fa-plus"></li> Agregar
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