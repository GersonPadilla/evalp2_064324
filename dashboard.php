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
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Dashboard</h1>

        <div class="cards">
            <a class="card" href="figuras.php">
                <h2>📐 Cálculo de Figuras</h2>
                <p>Calcula áreas, perímetros y volúmenes</p>
            </a>

            <a class="card" href="triangulos.php">
                <h2>🔺 Clasificación de Triángulos</h2>
                <p>Identifica el tipo de triángulo según sus lados</p>
            </a>

            <a class="card logout" href="logout.php">
                <h2>🚪 Cerrar Sesión</h2>
                <p>Salir de tu cuenta</p>
            </a>
        </div>
    </div>
</body>
</html>
