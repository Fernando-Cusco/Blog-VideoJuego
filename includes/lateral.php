<?php
require_once 'includes/helpers.php';
?>
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
  </div>

</aside>
