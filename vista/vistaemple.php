<?php 
  include('../controlador/conexion.php');
  //Evita el error de las variables vacias
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start ();  
?>

<?php 
if(isset($_SESSION["usuario_valido"])){
?>

<!DOCTYPE html>
<html lang="es">
<title>Bienvenido a LIS</title>
 <?php include('head_emple.php') ?>
<body>
<div class="bg-white">
<div class="jumbotron bg-white">
  <h1 class="display-4">Bienvenido  </h1>
  <br>
  <p class="lead">Descripción breve de LIS.</p>
</div>
 <?php include('footer_lis.php') ?> 
</div>
</body>
</html>

<?php
}else{
      print ("<BR><BR>\n");
      print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
      print ("<P ALIGN='CENTER'><a class='btn btn-primary' href='login.php' role='button'>Conectar</a></P>\n");
}
?>


