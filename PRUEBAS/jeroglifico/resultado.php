<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

 $fecha = date("Y-m-d");
 echo "<h1>Fecha:$fecha</h1>";

?>