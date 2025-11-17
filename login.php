<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Inicio de Sesión</h1>

<form action="validar.php" method="POST">
    <label>Usuario:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Ingresar</button>
</form>

<?php  
if (isset($_GET['error'])) {
    echo "<p class='error'>Usuario o contraseña incorrectos</p>";
}
?>

</body>
</html>
