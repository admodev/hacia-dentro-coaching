<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Primero tenés que iniciar sesión.";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  $indexredirect = "./index.php";

  $perfil = "./perfil.php";
  
  $registrarse = "./register.php";

  $vivenciales = "./vivenciales.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaciaDentro Coaching</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
  <!-- Spinner loading para el video (Cuando carga) 
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      -->
      <header id="header">
        <div class="navbar" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo $indexredirect; ?>"><img src="./img/logo.jpg" alt="logo" class="logo-menu"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon" id="toggler" onclick="hamburguerFunction()"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarColor03">
                  <ul class="navbar-nav mr-auto ml-5">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Introd. Al Coaching <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $vivenciales; ?>">Talleres Vivenciales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Coaching Personal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                          <li class="nav-item perfil-flex">
                            <a href="<?php echo $perfil; ?>" name="perfil" class="perfil">
                              <img src="./img/perfil.png" alt="perfil" class="perfil">
                              </a> 
                          </li> 
                          <li class="simbolo-mas">
                            <a href="<?php echo $registrarse; ?>" name="registrarse" class="mas">
                              <img src="./img/plus.png" alt="mas" class="plus">
                            </a>
                          </li>
				  </ul>
              </nav>
        </div>
    </header>
    <div class="background-streaming">
      <div class="reproductor">
        <video src="" width="720" height="400" controls class="video" id="video"></video>
      </div>
    </div>

    <footer>
      <a href="https://wa.me/541162260320" target="_blank"><img src="./img/whatsapp.png" alt="whatsapp" class="whatsapp"></a>
    </footer>
</body>
</html>