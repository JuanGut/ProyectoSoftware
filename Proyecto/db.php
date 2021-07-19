<?php 

//$conexion= mysqli_connect("sql307.epizy.com" ,"epiz_29169643", "CVT90zFcgH", "epiz_29169643_bd_industrias_4");
$conexion= mysqli_connect("localhost" ,"root", "1234", "bd_industrias_4");
echo "Conectado";
if (!$conexion) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';


?>