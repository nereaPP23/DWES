<?php
session_start();
require 'pintar-circulos.php';


if (!isset($_SESSION['colores-escogidos'])) {
    for ($i = 0; $i < $_SESSION['numero']; $i++) {
        $_SESSION['colores-escogidos'][$i] = 'black';
    }
    $_SESSION['pulsaciones'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $color = $_POST['color'];
    $index = $_SESSION['pulsaciones'];

    if ($index < $_SESSION['numero']) {
        $_SESSION['colores-escogidos'][$index] = $color;
        $_SESSION['pulsaciones']++;
    }
}

pintar_circulos($_SESSION['colores-escogidos']);



if ($_SESSION['pulsaciones'] >= $_SESSION['numero']) {
    if ($_SESSION['colores-escogidos'] === $_SESSION['colores-correctos']) {
        header("Location:acierto.php");
        exit;
    } else {
        header("Location:fallo.php");
        exit;
    }
}


echo <<<END
<form method="post" action="jugar.php">
    <h1>SIMÓN</h1>
        <h2>Pulsa los botones en el orden correspondiente</h2>
END;



echo '<button type="submit" name="color" value="red" style="background-color:red; border:2px solid black; margin-right:10px;">ROJO</button>';
echo '<button type="submit" name="color" value="blue" style="background-color:blue; border:2px solid black; margin-right:10px;">AZUL</button>';
echo '<button type="submit" name="color" value="yellow" style="background-color:yellow; border:2px solid black; margin-right:10px;">AMARILLO</button>';
echo '<button type="submit" name="color" value="green" style="background-color:green; border:2px solid black; margin-right:10px;">VERDE</button>';

echo '</form>';
?>