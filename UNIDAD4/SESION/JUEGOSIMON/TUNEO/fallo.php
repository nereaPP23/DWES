<?php
session_start();
include "pintar-circulos.php";

echo "<h2>Lo sentimos, has fallado</h2>";

echo "<p>Combinación correcta:</p>";
    pintar_circulos(
        for ($i = 0; $i < count($_SESSION['numero']); $i++) {
        $_SESSION['combinacioncorrecta'][$i],
        }
    );

    echo "<p>Tu combinación:</p>";
    pintar_circulos(
        for ($i = 0; $i < count($_SESSION['numero']); $i++) {
        $_SESSION['jugada'][$i],
        }
    );

     // Reiniciar para volver a jugar
    $_SESSION['jugada'] = [];

    echo "<a href='inicio.php'>Volver a jugar</a>";

?>