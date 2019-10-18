<?php
require_once('includes/redireccion.php');                                   //redirije en el caso no este con sesion inciada el usuario
require_once('includes/cabecera.php');
require_once('includes/lateral.php');
?>

<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade nuevas entradas para los usuarios.
    </p>
    <br />
    <form action="guardar_entrada.php" method="POST">
        <label for="titulo">Nombre de la entrada</label>
        <input type="text" name="titulo" />

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="90" rows="10"></textarea>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $categorias = getCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)): ?>
                <option value="<?= $categoria['id']; ?>">
                    <?= $categoria['nombre']; ?>
                </option>
            <?php endwhile;
            endif; ?>
        </select>
        <input type="submit" value="Guardar" />
    </form>
</div>
<?php require_once('includes/pie.php') ?>