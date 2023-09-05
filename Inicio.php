<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="InicioS.css" rel="stylesheet">
</head>
<body>
    <div class="form-box">
        <div class="header-text">
            Bienvenido
        </div>
        <form action="ConexionData.php" method="POST">
            <input type="text" placeholder="Usuario" id="usuario" name="usuario" required>
            <input placeholder="Contraseña" type="password" id="contrasena" name="contrasena" required>
            <input id="terms" type="checkbox"><label for="terms"></label>Aceptar Terminos y condiciones
            <br>
            <br>
            <button type="submit">Ingresar</button>
        </form>
        <button>¿Olvidó su contraseña?</button>
    </div>
</body>
</html>



