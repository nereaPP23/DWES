<?php

session_start();

$num = count($_SESSION['contactos']);

echo "<h1>Agenda</h1>";
echo "<h2>Hola $_SESSION[usuario]</h2>";
echo "<p>Se han grabado $num contactos de $_SESSION[usuario]</p>";
echo "<a href='index.php'>Volver a loguearse</a><br>";
echo "<a href='inicio.php'>Introducir mas contactos para $_SESSION[usuario]</a><br>";
echo "<a href='totales.php'>Total de contactos guardados</a><br>";


?>