<aside id="sidebar">
  <?php if (isset($_SESSION['usuario'])) : ?>
    <div id="user-logeado" class="bloque">
      <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'] ?></h3>
      <a href="crear_entrada.php" class="boton boton-verde">Publica Algo</a>
      <a href="crear_categoria.php" class="boton">Crear Categoria</a>
      <a href="#" class="boton boton-naranja">Mis Datos</a>
      <a href="cerrar_sesion.php" class="boton boton-rojo">Cerrar Sesion</a>
      <?php if (isset($_SESSION['categoria'])) :
              echo "<h4>" . $_SESSION['categoria'] . "</h4>";
              unset($_SESSION['categoria']);
            endif;
        ?>
       <?php 
        if(isset($_SESSION['entrada'])):
          if(!is_array($_SESSION['entrada'])):
            echo "<h4>" . $_SESSION['entrada'] . "</h4>";
          else:
            foreach($_SESSION['entrada'] as $error):
              echo "<h4>" . $error . "</h4>";
            endforeach;  
          endif;
          unset($_SESSION['entrada']);
        endif; 
       ?> 
    </div>
  <?php endif; ?>

  <?php if (!isset($_SESSION['usuario'])) : ?>
    <div id="login" class="bloque">
      <h3>Identificate</h3>
      <?php if (isset($_SESSION['error_login'])) : ?>
        <div class="alerta alerta-error">
          <?= $_SESSION['error_login'] ?>
        </div>
      <?php endif; ?>
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
      <!--Mostrar errores  -->
      <?php if (isset($_SESSION['completado'])) : ?>
        <div class="alerta alerta-exito">
          <?= $_SESSION['completado']; ?>
        </div>
      <?php elseif (isset($_SESSION['errores']['general'])) : ?>
        <div class="alerta alerta-error">
          <?= $_SESSION['errorres']['general']; ?>
        </div>
      <?php endif; ?>
      <form action="registro.php" method="post">
        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

        <input type="submit" value="Registrarse" name="submit">
      </form>
      <?php borrarErrores(); ?>
    </div>
  <?php endif; ?>
</aside>