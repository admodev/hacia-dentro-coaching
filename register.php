<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de registro con PHP y MySQL</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
    <h2>Registrarse</h2>
    </div>
    <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
    <label>Usuario</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
    <label>Contraseña</label>
    <input type="password" name="password_1">
    </div>
    <div class="input-group">
    <label>Repetir Contraseña</label>
    <input type="password" name="password_2">
    </div>
    <div class="input-group">
    <button type="submit" class="btn" name="reg_user">Registrate</button>
    </div>
    <p>
    Ya sos miembro? <a href="./login.php">Iniciar Sesión</a>
    </p>
    </form>
</body>
</html>