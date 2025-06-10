<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
    <link href="../css/estilos.editar.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Editar Datos</h1>
        </div>
        <div class="form-container">
            <p>
                <?php
                include('conexion.php');

                // Verificar si se ha pasado un ID válido
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];

                    // Consultar los datos de la fila correspondiente al ID
                    $consulta = "SELECT * FROM empleados WHERE ID_empleado = $id";
                    $result = $conexionEmpleado->query($consulta);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();

                        // Mostrar el formulario con los datos prellenados
                        echo "<form id='formularioEditar' action='actualizar.php?id=$id' method='post' class='formulario'>";
                        echo "<div class='section'>";
                        echo "<div class='campo'>";
                        echo "<label for='nombre'>Nombre:</label>";
                        echo "<input type='text' id='nombre' name='Nombre_empleado' value='" . $row['Nombre_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div class='campo'>";
                        echo "<label for='email'>Email:</label>";
                        echo "<input type='email' id='email' name='Email_empleado' value='" . $row['Email_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div class='campo'>";
                        echo "<label for='direccion'>Dirección:</label>";
                        echo "<input type='text' id='direccion' name='Direccion_empleado' value='" . $row['Direccion_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div class='campo'>";
                        echo "<label for='telefono'>Teléfono:</label>";
                        echo "<input type='tel' id='telefono' name='Telefono_empleado' value='" . $row['Telefono_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div class='campo fechas-container'>";
                        echo "<div>";
                        echo "<label for='fechaCreacion'>Fecha de Creación:</label>";
                        echo "<input type='date' id='fechaCreacion' name='Fecha_creacion_empleado' value='" . $row['Fecha_creacion_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div>";
                        echo "<label for='fechaEdicion'>Fecha de Edición:</label>";
                        echo "<input type='date' id='fechaEdicion' name='Fecha_edicion_empleado' value='" . $row['Fecha_edicion_empleado'] . "' required>";
                        echo "</div>";

                        echo "<div>";
                        echo "<label for='estado'>Estado:</label>";
                        echo "<select id='estado' name='Estado_empleado' required>";
                        echo "<option value='1' " . ($row['Estado_empleado'] == 1 ? 'selected' : '') . ">Activo</option>";
                        echo "<option value='0' " . ($row['Estado_empleado'] == 0 ? 'selected' : '') . ">Inactivo</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";

                        echo "<div class='section'>";
                        echo "<div class='botones'>";
                        echo "<button type='button' class='btn-actualizar' onclick='actualizarDatos();'>Actualizar</button>";
                        echo "</div>";

                        // Agregar el enlace para redirigir a mostrar.php
                        echo "<div class='botones'>";
                        echo "<a href='mostrar.php' class='btn-mostrar'>Mostrar Datos</a>";
                        echo "</div>";
                        echo "</div>";

                        echo "</form>";
                    } else {
                        echo "<p>No se encontraron datos para editar.</p>";
                    }

                    // Cerrar la conexión
                    $conexionEmpleado->close();
                } else {
                    echo "<p>ID no válido.</p>";
                }
                ?>
            </p>
        </div>
    </div>
    <script src="../js/actualizarFormulario.js"></script>
</body>

</html>
