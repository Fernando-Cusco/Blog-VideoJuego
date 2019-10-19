<?php 
    if(isset($_POST)){
        require_once('includes/conexion.php');
        //recogemos los datos que nos llegan por post
        $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
        $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
        $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
        $usuario = $_SESSION['usuario']['id'];

        //validamos los valores
        $errores = array();
        if(empty($titulo)){
            $errores['titutlo'] = "El titulo no puede ser vacio";
        }
        if(empty($descripcion)){
            $errores['descripcion'] = "La descripcion no es validad";
        }
        if(empty($categoria) && !is_numeric($categoria)){
            $errores['categoria'] = "La categoria no es correcta";
        }
        if(count($errores) == 0){
            $sql = "insert into entradas values(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
            $guardar = mysqli_query($db, $sql);
            $_SESSION['entrada'] = "Entrada creada correctamente";
        } else {
            $_SESSION['entrada'] = $errores;
        }
        header('Location: index.php');
    }
?>