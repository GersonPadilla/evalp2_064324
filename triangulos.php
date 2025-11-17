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
    <title>Triángulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/triangulos.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center text-success mb-5">Clasificación de Triángulos</h1>

    <div class="card shadow mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <form id="formTriangulo">
                <div class="mb-3">
                    <label class="form-label">Lado 1:</label>
                    <input id="lado1" type="number" min="1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lado 2:</label>
                    <input id="lado2" type="number" min="1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lado 3:</label>
                    <input id="lado3" type="number" min="1" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Clasificar</button>
            </form>
            <h3 id="resultado" class="text-center mt-3"></h3>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="dashboard.php" class="btn btn-secondary">Volver</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
