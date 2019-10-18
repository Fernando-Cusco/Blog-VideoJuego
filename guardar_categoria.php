<?php
    if(isset($_POST)){
        require_once('includes/conexion.php');
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

        //comprobamos si existen errores
        $errores = array();
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombreOk = true;
        } else {
            $nombreOk = false;
            $errores['nombrec'] = "Nombre incorrecto";
        }

        //guardar en la base da datos
        if(count($errores) == 0){
            $guardarCategoria = true;
            $sql = "insert into categorias values(null, '$nombre');";
            $guardar = mysqli_query($db, $sql);
            if($guardar){
                $_SESSION['categoria'] = "Categoria creada";
            } else {
                $_SESSION['categoria'] = "No se pudo crear la categoria";
            }
        }
    }
    header('Location: index.php');
?>