<?php 

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();

include('db.php');
if($usuario === '' || $contraseña === '')
{
    include("login.php");
            ?>
            <h1 class = "bad">Datos erróneos. Por favor, inténtelo otra vez. </h1>
            <?php
}
else{

    $consulta = "SELECT*FROM usuario where correo ='$usuario' and contraseña = '$contraseña';";
        $resultado = mysqli_query($conexion, $consulta);
        $filas = mysqli_num_rows($resultado);
        if($filas)
        {
            header("location:home.php");
        }
        else
        {
            ?>
            <?php
            include("login.php");
            ?>
            <h1 class = "bad">Datos erróneos. Por favor, inténtelo otra vez. </h1>
            <?php
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion);
}

