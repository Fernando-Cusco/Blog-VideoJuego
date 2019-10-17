<?php

function mostrarError($errores, $campo){
  $alerta = '';
  if(isset($errores[$campo]) && !empty($campo)){
    $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
  }
  return $alerta;
}

function borrarErrores(){
  $borrado = false;
    if (isset($_SESSION['errores'])) {
      $_SESSION['errores'] = null;
      $borrado = session_unset();
    }
    if (isset($_SESSION['completado'])) {
      $_SESSION['completado'] = null;
      $borrado = session_unset();
    }
  return $borrado;
}

function getCategorias($db){
  $sql = "select * from categorias order by id asc;";
  $categorias = mysqli_query($db, $sql);
  $result = array();
  if($categorias && mysqli_num_rows($categorias) >=1){
    $result = $categorias;
  }
  return $result;
}

?>
