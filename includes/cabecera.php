<?php
  require_once 'conexion.php';
  require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <title>Mi Blog VideoJuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  </head>
  <body>

    <!--Cabecera-->
    <header id="cabecera">
      <div id="logo">
        <a href="index.php">
          Blog de Juegos
        </a>
      </div>
      <!--Menu-->
      <?php 
      //obtenemos las categorias
      $categorias = getCategorias($db);
      ?>
      <nav id="menu">
        <ul>
          <li>
            <a href="index.php">Inicio</a>
          </li>
          <?php if(!empty($categorias)): ?>
            <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
              <li>
                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
          
          <li>
            <a href="index.php">Acerca de</a>
          </li>
          <li>
            <a href="index.php">Contactanos</a>
          </li>
        </ul>
      </nav>
      <div class="clearfix"></div>
    </header>

    <div id="contenedor">
