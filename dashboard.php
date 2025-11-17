<?php  
session_start(); 
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Bienvenido al Dashboard</h1>

<ul>
    <li><a href="figuras.php">Cálculo de Figuras</a></li>
    <li><a href="triangulos.php">Clasificación de Triángulos</a></li>
    <li><a href="logout.php">Cerrar Sesión</a></li>
</ul>

</body>
</html>
