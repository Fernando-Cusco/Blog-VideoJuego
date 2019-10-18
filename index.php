<?php
  //cabecera
  require_once 'includes/cabecera.php';
?>

      <!--Sidebar-->
      <?php
      //login y registro
      require_once 'includes/lateral.php';
      ?>
      <!--Contenido-->
      <div id="principal">
        <h1>Ultimas entradas</h1>
        <?php $entradas = getUltimasEntradas($db);
        if(!empty($entradas)):
          while($entrada = mysqli_fetch_assoc($entradas)): ?>
            <article class="entrada">
              <a href="#">
                <h2><?= $entrada['titulo'] ?></h2>
                <span class="fecha"><?= $entrada['categoria'].' '.$entrada['fecha'] ?></span>
                <p>
                  <?= substr($entrada['desc'], 0, 250); ?>
                  .....
                </p>
              </a>
            </article>
          <?php endwhile;?>
        <?php endif;?>
        
        <div id="ver-todas">
          <a href="#">Ver todas las entradas</a>
        </div>
      </div>
    

    <?php
    require_once 'includes/pie.php';
    ?>
