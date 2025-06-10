# CRUD_GR02

Creación de un CRUD de datos de EMPLEADOS

## 🚀 Integrantes

- ✅ Luis Burbano
- ✅ Marco Esparza
- ✅ Camila Morales
- ✅ Matthew Salazar
- ✅ Jerly Reinoso

## 💻 Estructura del proyecto

Para el desarrollo de nuestro proyecto tenemos la siguiente estructura que cuenta con 3 carpetas y 
- 📂 CSS
- - Estilos
- 📂 JS
- - Actualizar Formulario
  - Enviar Formulario
- 📂 PHP
- - Conexión
- - Insertar
- - Editar
- - Eliminar
- - Actualizar
- - Mostar
- 💻 INDEX

## 📷 Capturas del funcionamiento

- INSERTAR 

- MOSTRAR

- EDITAR

- ELIMINAR

![Captura](ruta/a/la/imagen.png)

## 🛠️ Tecnologías utilizadas

- PHP
- Base de datos

## 📋 NOTAS ADICIONALES
Se debe crear una BDD llamada "empleados" que contenga los siguientes campos: 

| Nombre de Campo           | Tipo de Dato     | Restricciones                   | Descripción                           |
|--------------------------|------------------|--------------------------------|-------------------------------------|
| `ID_empleado`            | `INT`            | `AUTO_INCREMENT`, `PRIMARY KEY`| Identificador único del empleado    |
| `Nombre_empleado`        | `VARCHAR(255)`   | `NOT NULL`                     | Nombre completo del empleado         |
| `Email_empleado`         | `VARCHAR(255)`   | `NOT NULL`                     | Correo electrónico del empleado      |
| `Direccion_empleado`     | `VARCHAR(255)`   | `NOT NULL`                     | Dirección física del empleado         |
| `Telefono_empleado`      | `VARCHAR(255)`   | `NOT NULL`                     | Número telefónico del empleado        |
| `Fecha_creacion_empleado`| `DATE`           | `NOT NULL`                     | Fecha en que se creó el registro      |
| `Fecha_edicion_empleado` | `DATE`           | `NOT NULL`                     | Fecha de la última edición            |
| `Estado_empleado`        | `VARCHAR(100)`   | `NOT NULL`                     | Estado actual del empleado (activo, inactivo, etc.) |

‼️ Adicional en la Clase "Conexion" ubicada en la carpeta "Php" se debe cambiar las credenciales a las que utilice dependiendo de su gestor de base de datos.


## ⚙️ Instalación

Instrucciones para clonar el proyecto y ejecutarlo localmente:

```bash
git clone https://github.com/usuario/nombre-del-repo.git
cd nombre-del-repo
