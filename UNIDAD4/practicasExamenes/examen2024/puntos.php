<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';

$login = $_SESSION['login'];

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

echo "<h1>Puntos por jugador</h1>"

?>