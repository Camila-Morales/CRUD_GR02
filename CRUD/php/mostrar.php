<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Ingresados</title>
    <link href="../css/estilos.mostrar.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Datos Ingresados en la Base de Datos "Empleado"</h1>
        </div>
        <div class="form-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Edición</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('conexion.php');

                    // Consultar los datos de la base de datos
                    $consulta = "SELECT * FROM empleados";
                    $result = $conexionEmpleado->query($consulta);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['ID_empleado'] . "</td>";
                            echo "<td>" . $row['Nombre_empleado'] . "</td>";
                            echo "<td>" . $row['Email_empleado'] . "</td>";
                            echo "<td>" . $row['Direccion_empleado'] . "</td>";
                            echo "<td>" . $row['Telefono_empleado'] . "</td>";
                            echo "<td>" . $row['Fecha_creacion_empleado'] . "</td>";
                            echo "<td>" . $row['Fecha_edicion_empleado'] . "</td>";
                            echo "<td>" . $row['Estado_empleado'] . "</td>";
                            echo "<td style='width: 200px; text-align: center;'>
                                    <a href='editar.php?id=" . $row['ID_empleado'] . "' class='btn-editar'>Editar</a>
                                    <a href='eliminar.php?id=" . $row['ID_empleado'] . "' class='btn-eliminar'>Eliminar</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>No hay datos para mostrar</td></tr>";
                    }

                    // Cerrar la conexión
                    $conexionEmpleado->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
