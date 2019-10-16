<?php
  if(isset($_POST)){
    //usamos operadores ternarios evitar varios if's
    //        si existe                true                 false
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

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
      //insertamos el usuario en la tabla
      $guardarUsuario = true;

    } else {

    }
  }
?>
