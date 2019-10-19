<?php
require_once('includes/redireccion.php');                                   //redirije en el caso no este con sesion inciada el usuario
require_once('includes/cabecera.php');
require_once('includes/lateral.php');
?>
<!--Contenido-->
<div id="principal">
    <h1>Mis datos</h1>
    <?php 
    if(isset($_SESSION['actualizar'])){
        if(is_array($_SESSION['actualizar'])){
            foreach($_SESSION['actualizar'] as $error): ?>
                <h3 class="alerta alerta-error"><?= $error; ?></h3>
            <?php
            endforeach;   
        } else { ?>
            <h3 class="alerta alerta-exito"><?= $_SESSION['actualizar']; ?></h3>
        <?php }
        
        unset($_SESSION['actualizar']);     
    }
     ?>
    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado']; ?>
        </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general']; ?>
        </div>
    <?php endif;?>
    <form action="actualizar_usuario.php" method="post">
        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>"/>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>"/>

        <label for="email">Email</label>
        <input type="text" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>

        <input type="submit" name="submit" value="Actualizar">
    </form>

</div>


<?php require_once('includes/pie.php') ?>