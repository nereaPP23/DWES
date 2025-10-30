<?php
session_start();
include "pintar-circulos.php";

    echo "<h2>Enhorabuena, has acertado la combinación!</h2>";
    pintar_circulos(
        for ($i = 0; $i < count($_SESSION['numero']); $i++) {
        $_SESSION['combinacioncorrecta'][$i],
        }
    );

    // Reiniciar para volver a jugar
    $_SESSION['jugada'] = [];

    echo "<a href='inicio.php'>Volver a jugar</a>";

?>