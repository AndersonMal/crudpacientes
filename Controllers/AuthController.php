<?php
require_once "../Models/AuthModel.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar y obtener datos
    $usuario = trim($_POST['usuario'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $authModel = new AuthModel();
    $admin = $authModel->getAdmin($usuario);

    if ($admin && $admin['clave'] === md5($password)) {
        $_SESSION['admin'] = $admin['usuario'];
        header('Location: /crudpacientes/'); // Redirige a donde necesites
        exit;
    } else {
        // Asegúrate de que no haya ECHO o ESPACIOS antes del header
        $_SESSION['login_error'] = 'Usuario o contraseña incorrectos';
        header('Location: ../Views/login.php');
        exit;
    }
}
