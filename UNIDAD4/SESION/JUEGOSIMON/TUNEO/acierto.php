<?php
session_start();
include "pintar-circulos.php";

    echo "<h2>Enhorabuena, has acertado la combinación!</h2>";
    pintar_circulos($_SESSION['combinacioncorrecta']);

    // Reiniciar para volver a jugar
    $_SESSION['jugada'] = [];

    echo "<a href='inicio.php'>Volver a jugar</a>";

?>