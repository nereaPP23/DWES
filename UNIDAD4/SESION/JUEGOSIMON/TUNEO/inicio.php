<?php

session_start();
include "pintar-circulos.php";

$_SESSION['numero'] = $_POST['numero'];

$colores = array("red", "green", "blue", "yellow");
$combinacion = array();





for ($i = 0; $i < $_SESSION['numero']; $i++) {
    $combinacion[] = $colores[array_rand($colores)];
}

$_SESSION['combinacioncorrecta'] = $combinacion;
$_SESSION['jugada'] = [];



echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>

_END;

pintar_circulos($combinacion);

echo <<<_END
    <form action="jugar.php" method="post">
        <input type="submit" name="submit" value="Vamos a jugar">
    </form>
    </body>
</html>
_END;
?>