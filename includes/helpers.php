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
      $borrado = true;
    }
    if (isset($_SESSION['completado'])) {
      $_SESSION['completado'] = null;
      $borrado = true;
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

function getOneCategoria($db, $id){
  $sql = "SELECT * FROM categorias WHERE id = '$id';";
  $categoria = mysqli_query($db, $sql);
  $result = array();
  if($categoria && mysqli_num_rows($categoria) == 1){
    $result = mysqli_fetch_assoc($categoria);
  }
  return $result;
}

function getUltimasEntradas($con){
  $sql = "SELECT e.titulo as 'titulo', e.descripcion as 'desc', c.nombre as 'categoria', e.fecha as 'fecha' FROM entradas as e, categorias as c where c.id = e.categoria_id order by e.id desc limit 4;";
  $entradas = mysqli_query($con, $sql);
  $resultado = array();
  if($entradas && mysqli_num_rows($entradas) >= 1){
    $resultado = $entradas;
  }
  return $resultado;
}

function getAllEntradas($con){
  $sql = "SELECT e.titulo as 'titulo', e.descripcion as 'desc', c.nombre as 'categoria', e.fecha as 'fecha' from entradas as e, categorias as c where c.id = e.categoria_id order by e.id desc;";
  $entradas = mysqli_query($con, $sql);
  $resultado = array();
  if($entradas && mysqli_num_rows($entradas) >= 1){
    $resultado = $entradas;
  }
  return $resultado;
}

function getAllEntradasCategoria($con, $id){
  $sql = "SELECT e.titulo as 'titulo', e.descripcion as 'desc', e.fecha as 'fecha' from entradas as e where e.categoria_id = '$id' ORDER BY e.id  asc;";
  $entradas = mysqli_query($con, $sql);
  
  $resultado = array();
  if($entradas && mysqli_num_rows($entradas) >= 1){
    $resultado = $entradas;
  }
  return $resultado;
}

?>
