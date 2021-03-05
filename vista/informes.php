<?php
?>
<!DOCTYPE html>
<html lang="es">
<title>Informes</title>
<?php include('head_lis.php') ?>

<body>

  <!-- Right Panel -->
  <div class="content">
      <div class="row">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Informes</strong>
                </div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="informes">
                <tr>
                    <th>Informes</th>
                    <th>Seleccionar informe</th>
                </tr>
                
                <tr>
                    <td>Informe Prestamos de Libros</td>
                    <td><button type="button" class="btn" onclick="location.href='Informe_PrestamoLi.php'" id="boton_agregar">
                    <li class="far fa fa-search"></li>
                    </button></td>
                </tr>

                <tr>
                    <td>Informe Prestamos de Material</td>
                    <td><button type="button" class="btn" onclick="location.href='Informe_PrestamoMa.php'" id="boton_agregar">
                    <li class="far fa fa-search"></li>
                    </button></td>
                </tr>

                <tr>
                    <td>Inventario Libro</td>
                    <td><button type="button" class="btn" onclick="location.href='Informe_InventarioLi.php'" id="boton_agregar">
                    <li class="far fa fa-search"></li>
                    </button></td>
                </tr>

                <tr>
                    <td>Inventario Material</td>
                    <td><button type="button" class="btn" onclick="location.href='Informe_InventarioMa.php'" id="boton_agregar">
                    <li class="far fa fa-search"></li>
                    </button></td>
                </tr>
                          </table>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="tab-pane fade"  role="tabpanel" aria-labelledby="pills-profile-tab">
    </div>
</div>
        <?php include('footer_lis.php') ?>
</body>

</html>