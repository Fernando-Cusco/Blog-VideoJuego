<?php
  //iniciar sesion y la conexion a la db.
  require_once 'includes/conexion.php';
  //obtener trader_cdlrisefall3methods
  if(isset($_POST)){
    //borramos la sesion del error en el caso de que la primera vez no dio el error al iniciar sesion
    if(isset($_SESSION['error_login'])){
      session_unset();
    }
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //comprobar credeciales del usuario
    $sql = "select * from usuarios where email = '$email'";
    $login = mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login) == 1){
      $usuario = mysqli_fetch_assoc($login);
      //verificar la password    me llega de la base de datos con el mysqli_fetch_assoc
      $verificar = password_verify($password, $usuario['password']);
      if($verificar){
        //utilizar una sesion para guardar los datos del usuario logeado
        $_SESSION['usuario'] = $usuario;
      } else {
        //enviar al usuario el fallo
        $_SESSION['error_login'] = "Password Incorrecta";
      }
    } else {
      $_SESSION['error_login'] = "Login Incorrecto";
    }
  }
  header('Location: index.php');

?>
