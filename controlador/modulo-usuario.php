<?php
include('conexion.php');
 
if($_POST['registro'] == 'nuevo') {

    $documento = $_POST['Id_Documento'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $estado = $_POST['Estado'];
    $tipo = $_POST['Tipo_Documento'];
    $rol = $_POST['Rol'];

    if ($documento!=null || $nombres!=null || $apellidos!=null || $telefono!=null || $correo!=null || $estado!=null || $tipo!=null || $rol!=null) {
        $sql=mysqli_query($conexion,"INSERT INTO `usuario` (Id_Documento, Nombres, Apellidos, Telefono, Correo, Estado, Tipo_Documento, Id_Rol) VALUES('$documento','$nombres','$apellidos','$telefono','$correo','$estado','$tipo','$rol')");
        
        if($sql){
            echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../vista/usuarios.php";</script>';

        }else{
            die("Error".mysqli_error($conexion));
        }
    }
} 