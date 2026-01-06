<?php
session_start();
require 'pintar-circulos.php';

$colores_correctos = $_SESSION['colores-correctos'];
$colores_escogidos = $_SESSION['colores-escogidos'];

echo "<h1>paco, lo sentimos has fallado</h1>";
echo "<p>LA COMBINACIÓN ERA:</p>";
pintar_circulos(
    $colores_correctos[0],
    $colores_correctos[1],
    $colores_correctos[2],
    $colores_correctos[3]
);

echo "<p>SU COMBINACIÓN ELEGIDA FUE:</p>";
pintar_circulos(
    $colores_escogidos[0],
    $colores_escogidos[1],
    $colores_escogidos[2],
    $colores_escogidos[3]
);

echo '<br><a href="inicio.php">Intentar de nuevo</a>';
?>
