<?php
//conexion
$server = 'localhost';
$username = 'admin';
$database = 'blog';
$password = 'admin';
$db = mysqli_connect($server, $username, $password, $database);

//consulta a la db,
mysqli_query($db, "SET NAME 'utf-8'");

//INICIAR LA SESSION
session_start();

?>
