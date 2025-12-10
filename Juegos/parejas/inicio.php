<?php
session_start();

unset($_SESSION['tablero']);
unset($_SESSION['descubiertas']);

$numcartas = $_SESSION['numcartas'];

// Creamos las parejas: ej. [A,A,B,B,C,C...]
$letras = range('A','Z');
$cartas = array_slice($letras,0,$numcartas/2);
$parejas = array_merge($cartas,$cartas);

// Mezclamos
shuffle($parejas);

$_SESSION['tablero'] = $parejas;
$_SESSION['descubiertas'] = array_fill(0,$numcartas,false);

echo "<h1>Juego de Memoria</h1>";
echo "<p>Memoriza las posiciones y empieza a jugar</p>";

require 'pintar_tablero.php';
pintar_tablero($_SESSION['tablero'],$_SESSION['descubiertas']);

echo '<form action="jugar.php" method="post">
        <input type="submit" value="Empezar">
      </form>';
?>
