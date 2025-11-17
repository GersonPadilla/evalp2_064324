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
    <title>Figuras</title>
    <script defer src="js/figuras.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Cálculo de Área y Volumen</h1>

<h2>Rectángulo</h2>
<form id="formRect">
    <label>Base:</label>
    <input id="base" type="number" min="1" required><br>

    <label>Altura:</label>
    <input id="altura" type="number" min="1" required><br>

    <button type="submit">Calcular</button>
</form>
<p id="rectRes"></p>

<h2>Cilindro</h2>
<form id="formCil">
    <label>Radio:</label>
    <input id="radio" type="number" min="1" required><br>

    <label>Altura:</label>
    <input id="hCil" type="number" min="1" required><br>

    <button type="submit">Calcular</button>
</form>
<p id="cilRes"></p>

<a href="dashboard.php">Volver</a>

</body>
</html>
