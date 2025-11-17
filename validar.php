<?php
session_start();

$usuarioCorrecto = "admin";
$passwordCorrecta = "123";

$user = $_POST['usuario'];
$pass = $_POST['password'];

if ($user === $usuarioCorrecto && $pass === $passwordCorrecta) {
    $_SESSION['auth'] = true;
    header("Location: dashboard.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
?>
