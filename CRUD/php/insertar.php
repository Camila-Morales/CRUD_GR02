<?php
include('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['Nombre_empleado'];
    $email = $_POST['Email_empleado'];
    $direccion = $_POST['Direccion_empleado'];
    $telefono = $_POST['Telefono_empleado'];
    $fechaCreacion = $_POST['Fecha_creacion_empleado'];
    $fechaEdicion = $_POST['Fecha_edicion_empleado'];
    $estado = $_POST['Estado_empleado'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO empleados (`Nombre_empleado`, `Email_empleado`, `Direccion_empleado`, `Telefono_empleado`, `Fecha_creacion_empleado`, `Fecha_edicion_empleado`, `Estado_empleado`) VALUES ('$nombre', '$email', '$direccion', '$telefono', '$fechaCreacion', '$fechaEdicion', '$estado')";

    // Ejecutar la consulta y verificar
    if ($conexionEmpleado->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conexionEmpleado->error;
    }
    
    // Cerrar la conexión
    $conexionEmpleado->close();
} else {
    echo "Solicitud no válida.";
}
?>
