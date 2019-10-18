<?php 
//si no existe la session, inciamos la sesion
if(!isset($_SESSION)){
    session_start();
}
//si no existe la session con algun usuario, redirijimos
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
?>