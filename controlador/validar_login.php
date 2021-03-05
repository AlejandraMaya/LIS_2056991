<?php

include('conexion.php');
session_start();

$correo=$_POST["correo"];
$clave=$_POST["clave"];

if(isset($correo) && isset($clave)){

    $consulta=mysqli_query($conexion,"SELECT*FROM usuario WHERE Correo='$correo' AND Clave='$clave'");
    $row = mysqli_fetch_array($consulta);
    mysqli_close($conexion);

    if($row > 0){

        $usuario_valido = $correo;
        $_SESSION["usuario_valido"] = $usuario_valido;
        echo"   <script>
                    window.alert('Bienvenido $correo');
                </script>";

        if($row['Id_Rol']==1){//administrador
            header("location:../vista/Welcome.php");
                
        }else if($row['Id_Rol']==2){//empleado
            header("location:../vista/vistaemple.php");
        }
            
        if($row['Id_Rol']==3){ //Profesor
                header("location:../vista/visteaGeneral.php");

        }else if($row['Id_Rol']==4){//alumno
                header("location:../vista/visteaGeneral.php");
        }
         
    }else{
        echo" <script>
                    window.alert('Usuario no encotrado intentalo de nuevo');
              </script>";
              print ("<P ALIGN='CENTER'><a class='btn btn-primary' href='../vista/login.php' role='button'>Conectar</a></P>\n");  

    }

}
