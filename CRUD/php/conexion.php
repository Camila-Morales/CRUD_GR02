<?php
$servername = "localhost";
$username = "root123";
$password = "abcd";
$database = "empleados"; 

// Crear conexión
$conexionEmpleado = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexionEmpleado->connect_error) {
    die("Conexión fallida: " . $conexionEmpleado->connect_error);
}
?>
