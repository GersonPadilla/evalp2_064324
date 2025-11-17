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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">

<div class="container py-5 text-center">
    <h1 class="mb-4 text-primary">Bienvenido al Dashboard</h1>

    <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="figuras.php" class="btn btn-outline-primary btn-lg">Cálculo de Figuras</a>
        <a href="triangulos.php" class="btn btn-outline-success btn-lg">Clasificación de Triángulos</a>
        <a href="logout.php" class="btn btn-outline-danger btn-lg">Cerrar Sesión</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
