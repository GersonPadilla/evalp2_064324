<?php  
session_start(); 
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clasificación de Triángulos</title>
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/triangulos.js"></script>
</head>
<body>

<div class="container">
    <h1>🔺 Clasificación de Triángulos</h1>

    <div class="card">
        <form id="formTriangulo">
            <label for="lado1">Lado 1:</label>
            <input id="lado1" type="number" min="1" required>

            <label for="lado2">Lado 2:</label>
            <input id="lado2" type="number" min="1" required>

            <label for="lado3">Lado 3:</label>
            <input id="lado3" type="number" min="1" required>

            <button type="submit">Clasificar</button>
        </form>
        <h3 id="resultado"></h3>
    </div>

    <a class="btn-volver" href="dashboard.php">⬅ Volver al Dashboard</a>
</div>

</body>
</html>
