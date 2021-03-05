<!DOCTYPE html>
<html lang="es">
<title>Bienvenido a LIS</title>
<?php include('head_lis.php') ?>

<body>
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

      

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Entrada Libro</strong>
                            </div>
                                <div class="card-body">

                                            <form class="" id="frmAgregar" action="#" method="post">
                                            <div class="form-row">
                                                <div class="col">
                                                        <label for="Libro">Libro</label>
                                                        <select class="form-control" id="Libro" name="Material" maxlength="30">
                                                            <option selected>Escoje Libro...</option>
                                                            <option>Principito</option>
                                                            <option>Nacho</option>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                    <label for="Libro" style="color: white;">Libro</label>
                                                    <input type="text" class="form-control" id="Libro" name="Libro" placeholder="Buscar Libro" required="" minlength="3" maxlength="30"><br>

                                                </div>

                                                    <div class="col">
                                                        <label for="Fecha_Baja">Fecha Baja</label>
                                                        <input type="date" class="form-control" id="Fecha_Baja" name="Fecha_Baja"  required="" minlength="0" maxlength="50"><br>

                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                <div class="col">
                                                        <label for="Usuario">Usuario</label>
                                                        <select class="form-control" id="Usuario" name="Usuario" maxlength="30">
                                                            <option selected>Escoje Usuario...</option>
                                                            <option>Pepito</option>
                                                            <option>Alcachofa</option>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                    <label for="Usuario" style="color: white;">Usuario</label>
                                                    <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Buscar Usuario" required="" minlength="3" maxlength="30"><br>

                                                </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                    <label for="Nota">Nota</label>
                                                    <input type="text" class="form-control" id="Nota" name="Nota" placeholder="Escribir Nota" required="" minlength="3" maxlength="30"><br>

                                                </div>
                                                </div>

                                                <div class="form-row">
                                                <div class="col">
                                                        <label for="Estado">Estado</label>
                                                        <select class="form-control" id="Estado" name="Estado" maxlength="30">
                                                            <option selected>Escoje Estado...</option>
                                                            <option>Dado Baja</option>
                                                        </select>
                                                    </div>

                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-dark">Limpiar campos</button>
                                                    <button type="submit" class="btn" name="agregar" id="boton_agregar_2">
                                                        <li class="fas fa-plus"></li> Agregar
                                                    </button>
                                                </div>
                                                </div>
                                            </form>

                                        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Entrada Material</strong>
                                </div>
                                <div class="card-body">

                                            <form class="" id="" action="#" method="post">
                                                <div class="form-row">
                                                <div class="col">
                                                        <label for="Material">Material</label>
                                                        <select class="form-control" id="Material" name="Material" maxlength="30">
                                                            <option selected>Escoje Material...</option>
                                                            <option>Ajedrez</option>
                                                            <option>Proyecto</option>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <label for="Fecha_Baja">Fecha Baja</label>
                                                        <input type="date" class="form-control" id="Fecha_Baja" name="Fecha_Baja"  required="" minlength="0" maxlength="50"><br>

                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                <div class="col">
                                                        <label for="Usuario">Usuario</label>
                                                        <select class="form-control" id="Usuario" name="Usuario" maxlength="30">
                                                            <option selected>Escoje Usuario...</option>
                                                            <option>Pepito</option>
                                                            <option>Alcachofa</option>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                    <label for="Usuario" style="color: white;">Usuario</label>
                                                    <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Buscar Usuario" required="" minlength="3" maxlength="30"><br>

                                                </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col">
                                                    <label for="Nota">Nota</label>
                                                    <input type="text" class="form-control" id="Nota" name="Nota" placeholder="Escribir Nota" required="" minlength="3" maxlength="30"><br>

                                                </div>
                                                </div>

                                                <div class="form-row">
                                                <div class="col">
                                                        <label for="Estado">Estado</label>
                                                        <select class="form-control" id="Estado" name="Estado" maxlength="30">
                                                            <option selected>Escoje Estado...</option>
                                                            <option>Dado Baja</option>
                                                        </select>
                                                    </div>

                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-dark">Limpiar campos</button>
                                                    <button type="submit" class="btn" name="agregar" id="boton_agregar_2">
                                                        <li class="fas fa-plus"></li> Agregar
                                                    </button>
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