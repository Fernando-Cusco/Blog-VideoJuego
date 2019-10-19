<?php 
if(isset($_POST)){
    require_once('includes/conexion.php');

    //obtemos los datos que llegan por post
    $nombre = $_POST['nombre'] ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = $_POST['apellidos'] ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = $_POST['email'] ? mysqli_real_escape_string($db, $_POST['email']) : false;

    //array de errores
    $errores = array();

    //validacion de datos
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombreValido = true;
    } else {
        $nombreValido = false;
        $errores['nombre'] = "El nombre es incorrecto";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidosValido = true;
    } else {
        $apellidosValido = false;
        $errores['apellidos'] = "El apellido es incorrecto";
    }
    if(!empty($email) && !is_numeric($email)){
        $emailValido = true;
    } else {
        $emailValido = false;
        $errores['email'] = "El email es incorrecto";
    }
    if(count($errores) == 0){
        $usuario = $_SESSION['usuario']['id'];
        //comprobar si el email existe
        $verificarEmail = "select id, email from usuarios where email = '$email';";
        $res = mysqli_query($db, $verificarEmail);
        $issetEmail = mysqli_fetch_assoc($res);
        if($issetEmail['id'] == $usuario || empty($issetEmail)){
            $guardar_usuario = true;
            //actualizamos el usuario
            $sql = "update usuarios set nombre = '$nombre', apellidos = '$apellidos', email = '$email' where id = '$usuario';";
            $guardar = mysqli_query($db, $sql);
            
            if($guardar){
                //actualizamos la sesion del usuario
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['actualizar'] = "Actualizacion correcta";
            } else {
                $_SESSION['actualizar']['general'] = "No se pudo actualizar correctamente";
            }
        } else {
            $_SESSION['actualizar'] ['email'] = 'No puedes usar ese correo.';
        }       
    } else {
        $_SESSION['actualizar'] = $errores;
    }
}
header('Location: mis_datos.php');
?>