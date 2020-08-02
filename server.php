<?php

session_start();

class RegistroAndLogin {

    public function inicializarVariables() {
        $username = "";
        $email = "";
        $errors = array();
    }

    public function conectarDB() {
        $host = "localhost";
        $dbuser = "root";
        $dbpassword = "11_De_Octubre_13";
        $database = "haciadentro";

        $connectionString = mysqli_connect($host, $dbuser, $dbpassword, $database);
    } 

    public function registrarUsuario() {

        if (isset($_POST['register_user'])) {

            // Sanitizar inputs de usuario

            $username = mysqli_real_escape_string($connectionString, $_POST['username']);
            $email = mysqli_real_escape_string($connectionString, $_POST['email']);
            $password_1 = mysqli_real_escape_string($connectionString, $_POST['password_1']);
            $password_2 = mysqli_real_escape_string($connectionString, $_POST['password_2']);

            // Validación de formulario

            if (empty($username)) { 
                array_push($errors, "Username is required"); 
            }
            if (empty($email)) { 
                array_push($errors, "Email is required"); 
            }
            if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
            }
            if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
            }

            // Checkea la base de datos para ver que no haya un usuario existente con los mismos datos

            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
            $result = mysqli_query($connectionString, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) { 
                if ($user['username'] === $username) {
                    array_push($errors, "Username already exists");
                }

                if ($user['email'] === $email) {
                    array_push($errors, "email already exists");
                }
            }

            // Registra al usuario si no hay errores en el formulario ni la base de datos

            if (count($errors) == 0) {
                $password = md5($password_1);

                $query = "INSERT INTO users (username, email, password) 
                    VALUES('$username', '$email', '$password')";
                mysqli_query($connectionString, $query);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Ahora estás logueado!";
                header('location: index.php');
                ini_set('session.cookie_lifetime',  10800);
            }
        }

    }

    public function loginUsuario() {
        if (isset($_POST['login_user'])) {
            $username = mysqli_real_escape_string($connectionString, $_POST['username']);
            $password = mysqli_real_escape_string($connectionString, $_POST['password']);

            if (empty($username)) {
                array_push($errors, "Username is required");
            }
            if (empty($password)) {
                array_push($errors, "Password is required");
            }

            if (count($errors) == 0) {
                $password = md5($password);
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $results = mysqli_query($connectionString, $query);
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "Ahora estás logueado!";
                    header('location: index.php');
                    ini_set('session.cookie_lifetime',  10800);
                }else {
                    array_push($errors, "Wrong username/password combination");
                }
            }
        }

    }

}
?>
