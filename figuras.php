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
    <title>Cálculo de Área y Volumen</title>
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/figuras.js"></script>
</head>
<body>

<div class="container">
    <h1>Cálculo de Área y Volumen</h1>

    <div class="cards">
        <!-- Rectángulo -->
        <div class="card">
            <h2>📐 Rectángulo</h2>
            <form id="formRect">
                <label>Base:</label>
                <input id="base" type="number" min="1" required>

                <label>Altura:</label>
                <input id="altura" type="number" min="1" required>

                <button type="submit">Calcular</button>
            </form>
            <p id="rectRes"></p>
        </div>

        <!-- Cilindro -->
        <div class="card">
            <h2>⚙️ Cilindro</h2>
            <form id="formCil">
                <label>Radio:</label>
                <input id="radio" type="number" min="1" required>

                <label>Altura:</label>
                <input id="hCil" type="number" min="1" required>

                <button type="submit">Calcular</button>
            </form>
            <p id="cilRes"></p>
        </div>
    </div>

    <a class="btn-volver" href="dashboard.php">⬅ Volver al Dashboard</a>
</div>



</body>
</html>

