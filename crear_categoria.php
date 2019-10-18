<?php 
require_once('includes/redireccion.php');                                   //redirije en el caso no este con sesion inciada el usuario
require_once('includes/cabecera.php');
require_once('includes/lateral.php');
?>

<div id="principal">
    <h1>Crear Categorias</h1>
    <p>
        Añade nuevas categorias para los usuarios.
    </p>
    <br/>
    <form action="guardar_categoria.php" method="POST">
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre"/>
        <input type="submit" value="Guardar"/>
    </form>
</div>
<?php require_once('includes/pie.php') ?>