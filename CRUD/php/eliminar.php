<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM empleados WHERE ID_empleado = $id";

    if ($conexionEmpleado->query($sql) === TRUE) {
        echo "Empleado eliminado correctamente";
    } else {
        echo "Error al eliminar el empleado: " . $conexionEmpleado->error;
    }

    header("Location: mostrar.php");
    exit();
} else {
    echo "ID no proporcionado para eliminar";
}
?>
