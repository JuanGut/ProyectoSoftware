<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conexion = new PDO("sqlsrv:server = tcp:miservidorsql5050.database.windows.net,1433; Database = miBaseDeDatos", "usuarioazure", "Molter123");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(!$conexion){
        die("No se pudo conectar")
    }
    else{
        die("Se conectó satisfactoriamente")
    }
}

catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "usuarioazure", "pwd" => "Molter123", "Database" => "miBaseDeDatos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:miservidorsql5050.database.windows.net,1433";
$conexion = sqlsrv_connect($serverName, $connectionInfo);
?>
