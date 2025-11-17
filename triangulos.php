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
    <title>Triángulos</title>
    <script defer src="js/triangulos.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Clasificación de Triángulos</h1>

<form id="formTriangulo">
    <label>Lado 1:</label>
    <input id="lado1" type="number" min="1" required><br>

    <label>Lado 2:</label>
    <input id="lado2" type="number" min="1" required><br>

    <label>Lado 3:</label>
    <input id="lado3" type="number" min="1" required><br>

    <button type="submit">Clasificar</button>
</form>

<h3 id="resultado"></h3>

<a href="dashboard.php">Volver</a>

</body>
</html>
