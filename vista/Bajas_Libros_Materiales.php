<?php
?>

<!DOCTYPE html>
<html lang="es">
<title>Libros Y Materiales</title>
<?php include('head_lis.php') ?>

<body>

    <!-- Right Panel -->


    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Entradas Libros Materiales</strong>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive table-sm" id="c_tabla">
                                            <table class="table table-striped table-hover" id="libros">

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn" onclick="location.href='Registrar_Baja.php'" id="boton_agregar">
                                                    <li class="far fa-plus-square"></li> Agregar Baja
                                                </button>

                                                <thead>
                                                    <tr>
                                                        <th>Tipo</th>
                                                        <th>Libro / Material</th>
                                                        <th>Usuario Responsable</th>
                                                        <th>Fecha Baja</th>                                                        
                                                        <th>Nota</th>
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





                <?php include('footer_lis.php') ?>


</body>

</html>