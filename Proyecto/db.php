<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conexion = new PDO("sqlsrv:server = tcp:miservidorsql5050.database.windows.net,1433; Database = miBaseDeDatos", "usuarioazure", "Andres123");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "usuarioazure", "pwd" => "Andres123", "Database" => "miBaseDeDatos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:miservidorsql5050.database.windows.net,1433";
$conexion = sqlsrv_connect($serverName, $connectionInfo);
?>
