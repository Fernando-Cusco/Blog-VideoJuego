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
      <nav id="menu">
        <ul>
          <li>
            <a href="index.php">Inicio</a>
          </li>
          <li>
            <a href="index.php">Accion</a>
          </li>
          <li>
            <a href="index.php">Arcade</a>
          </li>
          <li>
            <a href="index.php">Deportes</a>
          </li>
          <li>
            <a href="index.php">Horror</a>
          </li>
          <li>
            <a href="index.php">Recomendacion</a>
          </li>
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
      <!--Sidebar-->
      <aside id="sidebar">
        <div id="login" class="bloque">
          <h3>Identificate</h3>
          <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Entrar">
          </form>
        </div>

        <div id="registro" class="bloque">
          <h3>Registrarse</h3>
          <form action="login.php" method="post">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" />

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />

            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Registrarse">
          </form>
        </div>

      </aside>
      <!--Contenido-->
      <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
          <h2>Titulo de mi entrada</h2>
          <p>
            Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
          </p>
        </article>

        <article class="entrada">
          <h2>Titulo de mi entrada</h2>
          <p>
            Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
          </p>
        </article>

        <article class="entrada">
          <h2>Titulo de mi entrada</h2>
          <p>
            Descripcion: El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
          </p>
        </article>

      </div>


    </div>
    <!--Pie de pagina-->
    <footer id="pie">
      <p>Desarrollado por Fernando Cusco &copy; 2019</p>
    </footer>

  </body>
</html>
