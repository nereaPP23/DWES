<?php

session_start();
require_once "pintar_circulos.php";

$nombre = $_SESSION['usuario']; 


echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>$nombre pulsa los botones en el orden correspondiente</h2>
_END;


if (!isset($_SESSION['colores-escogidos'])) {
    $_SESSION['colores-escogidos'] = array('black', 'black', 'black', 'black');
    $_SESSION['pulsaciones'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $color = $_POST['color'];
    $index = $_SESSION['pulsaciones'];

    if ($index < 4) {
        $_SESSION['colores-escogidos'][$index] = $color;
        $_SESSION['pulsaciones']++;
    }
}

pintar_circulos(
    $_SESSION['colores-escogidos'][0],
    $_SESSION['colores-escogidos'][1],
    $_SESSION['colores-escogidos'][2],
    $_SESSION['colores-escogidos'][3]
);

if ($_SESSION['pulsaciones'] >= 4) {
    if ($_SESSION['colores-escogidos'] === $_SESSION['combinacion-correcta']) {
        header("Location:acierto.php");
        exit;
    } else {
        header("Location:fallo.php");
        exit;
    }
}



echo <<<_END
    <form action="jugar.php" method="post">
        <input type="submit" name="color" value="red" style=background-color:red>
        <input type="submit" name="color" value="green" style=background-color:green>
        <input type="submit" name="color" value="blue" style=background-color:blue>
        <input type="submit" name="color" value="yellow" style=background-color:yellow>
    </form>
    </body>
</html>
_END;



?>