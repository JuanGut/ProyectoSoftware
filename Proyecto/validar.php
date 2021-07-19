<?php 

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();

include('db.php');

$consulta = "SELECT*FROM usuario where correo ='$usuario';";
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
    <h1 class = "bad">Error en la autenticacion </h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
