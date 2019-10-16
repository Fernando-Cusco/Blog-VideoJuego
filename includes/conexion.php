<?php
//conexion
$server = 'localhost';
$username = 'admin';
$password = 'admin';
$database = 'blog';
$db = mysqli_connect($server, $username, $password, $database);

//consulta a la db,
mysqli_query($db, "SET NAME 'utf-8'");

?>
