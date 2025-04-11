<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <h3 class="text-center">Inicio de sesión (Admin)</h3>

        <?php
          if (isset($_SESSION['login_error'])) {
              echo '<div class="alert alert-danger">' . $_SESSION['login_error'] . '</div>';
              unset($_SESSION['login_error']);
          }
        ?>


        <form action="../Controllers/AuthController.php" method="POST">
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
