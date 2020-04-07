<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de registro con PHP y MySQL</title>
    <link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
<link rel="manifest" href="./img/site.webmanifest">
<link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="./img/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/aac2d9eec1.js" crossorigin="anonymous"></script>
    <script src="./src/index.js"></script>
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