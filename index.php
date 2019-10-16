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
        <article class="entrada">
          <a href="#">
            <h2>Titulo de mi entrada</h2>
            <p>
              Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
            </p>
          </a>
        </article>

        <article class="entrada">
          <a href="#">
            <h2>Titulo de mi entrada</h2>
            <p>
              Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
            </p>
          </a>

        </article>
        <article class="entrada">
          <a href="#">
            <h2>Titulo de mi entrada</h2>
            <p>
              Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
            </p>
          </a>
        </article>
        <div id="ver-todas">
          <a href="#">Ver todas las entradas</a>
        </div>
      </div>
    

    <?php
    require_once 'includes/pie.php';
    ?>
