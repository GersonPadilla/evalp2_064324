<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="login-container">
    <h1>🔐 Inicio de Sesión</h1>

    <form action="validar.php" method="POST" class="login-form">
        <label for="usuario">Usuario:</label>
        <input id="usuario" type="text" name="usuario" placeholder="Ingresa tu usuario" required>

        <label for="password">Contraseña:</label>
        <input id="password" type="password" name="password" placeholder="Ingresa tu contraseña" required>

        <button type="submit">Ingresar</button>
    </form>

    <?php  
    if (isset($_GET['error'])) {
        echo "<p class='error'>Usuario o contraseña incorrectos</p>";
    }
    ?>
</div>

</body>
</html>
