<?php
  if(isset($_POST)){
    require_once('includes/conexion.php');
    if(!isset($_SESSION)){
      session_start();
    }
    //usamos operadores ternarios evitar varios if's
    //        si existe                true                 false
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    //arreglo de errores
    $errores = array();

    //validar datos
    //validamos el nombre, no contenga numeros, no este vacio
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
      $nombreValidado = true;
    } else {
      $nombreValidado = false;
      $errores['nombre'] = "Nombre incorrecto";
    }
    //validamos el apellidos, no contenga numeros, no este vacio
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
      $apellidosValidado = true;
    } else {
      $apellidosValidado = false;
      $errores['apellidos'] = "Apellidos incorrecto";
    }
    //validar el Email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailValidado = true;
    } else {
      $emailValidado = false;
      $errores['email'] = "Email incorrecto";
    }
    //validar la contraseña
    if(!empty($password) && strlen($password) > 5){
      $passwordValidada = true;
    } else {
      $passwordValidada = false;
      $errores['password'] = "Contraseña incorrecta";
    }
    $guardarUsuario = false;
    if(count($errores) == 0){
      $guardarUsuario = true;
      //insertamos el usuario en la tabla
      //ciframos la password       mipass     tipo             numero de cifrados
      $pass_secure = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
      //descifrar
      //var_dump(password_verify($password, $pass_secure));
      $sql = "insert into usuarios values(null, '$nombre', '$apellidos', '$email', '$pass_secure', CURDATE());";
      $guardar = mysqli_query($db, $sql);

      if($guardar){
        $_SESSION['completado'] = "El registro se completo exitosamente";
      } else {
          $_SESSION['errores']['general'] = "Error no se pudo guardar el usuario.";
      }
    } else {
      $_SESSION['errores'] = $errores;
    }
    header('Location: index.php');
  }
?>
