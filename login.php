<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
  <div class="header">
  	<h2>Iniciar Sesión</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Usuario</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Contraseña</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Iniciar Sesión</button>
  	</div>
  	<p>
  		Aún no sos miembro? <a href="register.php">Registrarse</a>
  	</p>
  </form>
</body>
</html>