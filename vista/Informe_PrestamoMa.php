<?php
?>
<!DOCTYPE html>
<html lang="es">
<title>Informes Préstamos de materiales </title>
<?php include('head_lis.php') ?>

<body>

  <!-- Right Panel -->
  <div class="content">
      <div class="row">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Informes de Préstamo de Materiales</strong>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive table-sm" id="c_tabla">
                          <table class="table table-striped table-hover" id="informes">
                          <thead>
                          <i class="fas fa-file-pdf"></i>...<i class="fas fa-file-excel"></i>
                              <tr>
                                <th>Fecha Inicio <input type="date"></th>
                                <th>Fecha Fin <input type="date"></th>
                                <th>Categoría
                                  <select id="categoria" name="categoria" >
                                    <option selected>Categoría</option>
                                    <option>Ajedres</option>
                                    <option>Proyector</option>
                                    <option>Todas</option>
                                  </select> 
                                </th>
                              </tr>
                            </thead>
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