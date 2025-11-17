<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
    <h2 class="text-center mb-4 text-primary">Inicio de Sesión</h2>
    <form action="validar.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Usuario:</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
    <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger mt-3">Usuario o contraseña incorrectos</div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

