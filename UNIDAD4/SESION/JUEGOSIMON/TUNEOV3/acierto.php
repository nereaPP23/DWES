<?php
session_start();
require 'pintar-circulos.php';

$colores_correctos = $_SESSION['colores-correctos'];

echo "<h2>¡Enhorabuena, has acertado la combinación!</h2>";

pintar_circulos($colores_correctos);

echo '<br><a href="dificultad.php">Volver a jugar</a>';
?> 