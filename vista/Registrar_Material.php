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
                                                <label for="Titulo_Material">Titulo Material</label>
                                                <input type="text" class="form-control" id="Titulo_Material" name="Titulo_Material" placeholder="Insertar Titulo Material" required="" minlength="0" maxlength="30"><br>
                                            </div>

                                            <div class="col">
                                                <label for="Descripcion">Descripcion</label>
                                                <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Insertar Descripcion" required="" minlength="0" maxlength="50"><br>

                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col">
                                                <label for="Categoria_Material">Categoria</label>
                                                <select class="form-control" id="Categoria_Material" name="Categoria_Material" maxlength="30">
                                                    <option selected>Escoje...</option>
                                                    <option>Español</option>
                                                    <option>Ingles</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="Estado_Material">Estado</label>
                                                <select class="form-control" id="Estado_Material" name="Estado_Material" maxlength="20">
                                                    <option selected>Escoje...</option>
                                                    <option>Activado</option>
                                                    <option>Prestado</option>
                                                    <option>Baja</option>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-dark">Limpiar campos</button>
                                            <button type="submit" class="btn" name="agregar" id="boton_agregar_2">
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