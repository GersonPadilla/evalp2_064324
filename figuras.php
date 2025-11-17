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
    <title>Figuras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/figuras.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center text-primary mb-5">Cálculo de Área y Volumen</h1>

    <!-- Rectángulo -->
    <div class="card mb-4 shadow">
        <div class="card-body">
            <h2 class="card-title text-center">Rectángulo</h2>
            <form id="formRect">
                <div class="mb-3">
                    <label class="form-label">Base:</label>
                    <input id="base" type="number" min="1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Altura:</label>
                    <input id="altura" type="number" min="1" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calcular</button>
            </form>
            <p id="rectRes" class="mt-3 text-center fw-bold"></p>
        </div>
    </div>

    <!-- Cilindro -->
    <div class="card mb-4 shadow">
        <div class="card-body">
            <h2 class="card-title text-center">Cilindro</h2>
            <form id="formCil">
                <div class="mb-3">
                    <label class="form-label">Radio:</label>
                    <input id="radio" type="number" min="1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Altura:</label>
                    <input id="hCil" type="number" min="1" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calcular</button>
            </form>
            <p id="cilRes" class="mt-3 text-center fw-bold"></p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="dashboard.php" class="btn btn-secondary">Volver</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
