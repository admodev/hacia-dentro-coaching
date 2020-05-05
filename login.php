<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
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
	<div class="row-horizontal d-flex flex-column justify-content-center align-items-center">
		<div class="header mt-5">
			<h2 class="text-uppercase mt-5">Iniciar Sesión</h2>
		</div>

		<form method="post" action="login.php" class="mt-2">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Usuario</label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<label>Contraseña</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn btn-login mx-auto mt-2" name="login_user">Iniciar Sesión</button>
			</div>
			<p>
				Aún no sos miembro? <a href="register.php" class="text-decoration-none">Registrarse</a>
			</p>
		</form>
	</div>
</body>

</html>
