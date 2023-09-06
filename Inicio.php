
<?php
echo '<link rel="stylesheet" type="text/css" href="InicioS.css">';
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="Stylesheet" href="InicioS.css" type="text/css">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div class="form-box">
        <div class="header-text">
            Bienvenido
        </div>
        <form action="Autenticacion.php" method="POST">
            <input type="text" placeholder=" Usuario" id="usuario" name="usuario" required>
            <input placeholder=" Contrasena" type="password" id="contrasena" name="contrasena" required>
            <br>
            <br>
            <button type="submit">Ingresar</button>          
        </form>
        <button>¿Olvidó su contraseña?</button>
    </div>

    <?php

    if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

</body>	
</style>
</html>

