<?php
session_start();
require 'pintar-circulos.php';

$colores_correctos = $_SESSION['colores-correctos'];

echo "<h1>paco enhorabuena, has acertado</h1>";

pintar_circulos(
    $colores_correctos[0],
    $colores_correctos[1],
    $colores_correctos[2],
    $colores_correctos[3]
);

echo '<br><a href="inicio.php">Volver a jugar</a>';
?>