<?php
// Datos de conexión a la base de datos MySQL
$host = 'localhost'; // Cambia esto si tu servidor MySQL no se ejecuta localmente
$usuario_db = 'Aaron';
$contrasena_db = '';
$base_de_datos = 'prueba';

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Conectar a la base de datos
$conexion = new mysqli($host, $usuario_db, $contrasena_db, $base_de_datos);

// Verificar si la conexión tiene errores
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Contraseña = '$contrasena'";
$resultado = $conexion->query($sql);

// Verificar si se encontró un registro con las credenciales proporcionadas
if ($resultado->num_rows == 1) {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $usuario!";
    // Aquí puedes redirigir al usuario a la página de inicio, por ejemplo.
} else {
    echo "Inicio de sesión fallido. Verifica tus credenciales.";
}

// Cerrar la conexión a la base de datos
$conexion->close();