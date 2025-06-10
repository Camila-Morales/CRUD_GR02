<?php
include('conexion.php');

// Verificar si se ha pasado un ID válido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Recuperar los datos del formulario
    $nombre = $_POST['Nombre_empleado'];
    $email = $_POST['Email_empleado'];
    $direccion = $_POST['Direccion_empleado'];
    $telefono = $_POST['Telefono_empleado'];
    $fechaCreacion = $_POST['Fecha_creacion_empleado'];
    $fechaEdicion = $_POST['Fecha_edicion_empleado'];
    $estado = $_POST['Estado_empleado'];

    // Preparar la consulta SQL para actualizar los datos
    $sql = "UPDATE empleados SET `Nombre_empleado`='$nombre', `Email_empleado`='$email', `Direccion_empleado`='$direccion', `Telefono_empleado`='$telefono', `Fecha_creacion_empleado`='$fechaCreacion', `Fecha_edicion_empleado`='$fechaEdicion', `Estado_empleado`='$estado' WHERE ID_empleado = $id";

    // Ejecutar la consulta y verificar
    if ($conexionEmpleado->query($sql) === TRUE) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al actualizar datos: " . $conexionEmpleado->error;
    }

    // Cerrar la conexión
    $conexionEmpleado->close();
} else {
    echo "Solicitud no válida.";
}
?>
