<?php
$server = "localhost";
$base_datos = "testCodility";
$usuario = "root";
$pwd = "";
// Create connection
$conexion= mysqli_connect($server, $usuario, $pwd, $base_datos);
// Check connection
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}


?>