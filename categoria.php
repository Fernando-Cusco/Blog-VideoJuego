<?php
//cabecera
require_once 'includes/cabecera.php';
$categoria = getOneCategoria($db, $_GET['id']);
if(!isset($categoria['id'])){
    header('Location: index.php');
}
?>
<?php

require_once 'includes/lateral.php';
?>
<!--Contenido-->
<div id="principal">
    <h1>Entradas de <?= $categoria['nombre']; ?></h1>
    <?php $entradas = getAllEntradasCategoria($db, $_GET['id']);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
            <article class="entrada">
                <a href="#">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class="fecha"><?=  $entrada['fecha'] ?></span>
                    <p>
                        <?= substr($entrada['desc'], 0, 250); ?>
                        .....
                    </p>
                </a>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
    <div class="alerta">No hay entradas para esta categoria.</div>
    <?php endif; ?>
</div>
<?php
require_once 'includes/pie.php';
?>