<?php 

$cedula=$_POST['user_cedula'];
$nombre=$_POST['user_name'];
$apellido=$_POST['user_name'];
$correo=$_POST['user_email'];
$contrasenia=$_POST['user_password'];
session_start();

include('db.php');

if($cedula === '' || $nombre === '' || $apellido === '' || $correo === '' || $contrasenia === '')
{
    include("registro.php");
            ?>
            <h1 class = "bad">Datos erróneos. Por favor, inténtelo otra vez. </h1>
            <?php
}
else{
    $consulta="INSERT INTO usuario (cedula,nombre,apellidos,correo,contraseña) VALUES ('$cedula', '$nombre','$apellido','$correo', '$contrasenia');";
    $resultado = mysqli_query($conexion, $consulta);
    echo $resultado;
    if($resultado)
    {
        header("location:home.php");
        
    }
    else
    {

        ?>
        <?php

        include("login.php");
        ?>
        <h1 class = "bad">Error en la autenticacion </h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

}

