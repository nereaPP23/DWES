<?php
include "pintar-circulos.php";

//asegurarse de que jugada esta creado
if (!isset($_SESSION['combinacion'])) { //combinacion se crea en inicio.php
    $_SESSION['combinacion'] = ['black', 'black', 'black', 'black'];
    $_SESSION['pulsaciones'] = 0;;
}

//guardar colores en el array jugada
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $color= $_POST['color'];
    $index = $_SESSION['pulsaciones'];
}

if ($index < 4) {
    $_SESSION['combinacion'][$index] = $color;
    $_SESSION['pulsaciones']++;
}

pintar_circulos(
    $_SESSION['combinacion'][0],
    $_SESSION['combinacion'][1],
    $_SESSION['combinacion'][2],
    $_SESSION['combinacion'][3]
)

$destino = "jugar2.php";
if ($_SESSION['pulsaciones'] >= 4) {
    if ($_SESSION['combinacion'] === $_SESSION['combinacioncorrecta']) {
        $destino = "acierto.php";
    } else {
        $destino = "fallo.php";
    }
}


echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Pulsa los botones en el orden correspondiente</h2>
_END;

echo <<<_END
    <form action="$destino" method="post">
        <input type="submit" name="color" value="red" style=background-color:red>
        <input type="submit" name="color" value="green" style=background-color:green>
        <input type="submit" name="color" value="blue" style=background-color:blue>
        <input type="submit" name="color" value="yellow" style=background-color:yellow>
    </form>
    </body>
</html>
_END;


/*
En los scripts de acierto y fallo se hace:
$combinacionCorrecta = $_SESSION['combinacioncorrecta'];
$combinacionJugada = $_SESSION['combinacion'];
*/


?>