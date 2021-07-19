<?php 

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
session_start();

include('db.php');

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
