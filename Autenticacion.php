<?php
// Datos de conexión a la base de datos MySQL
$host = 'localhost'; // Cambia esto si tu servidor MySQL no se ejecuta localmente
$usuario_db = 'Aaron';
$contrasena_db = '';
$base_de_datos = 'phpdb';

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
$sql = "SELECT * FROM user WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
$resultado = $conexion->query($sql);

// Verificar si se encontró un registro con las credenciales proporcionadas
if ($resultado->num_rows == 1) {
    header("Location: Principal.php"); 
    exit();

}else{
    header("Location: Inicio.php?error=Usuario o contraseña incorrectos");
}
// Cerrar la conexión a la base de datos
$conexion->close();