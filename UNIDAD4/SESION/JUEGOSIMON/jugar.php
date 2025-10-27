<?php
session_start();
include "pintar-circulos.php";

if (!isset($_SESSION['jugada'])) {
    $_SESSION['jugada'] = [];
}
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    $_SESSION['jugada'][] = $color;
}

$resultado = ""; // mensaje que mostraremos al final
if (count($_SESSION['jugada']) === 4) {
    if ($_SESSION['jugada'] === $_SESSION['combinacioncorrecta']) {
        $resultado = "¡Has acertado la combinación!";
    } else {
        $resultado = "Has fallado la combinación.";
    }
}






echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Pulsa los botones en el orden correspondiente</h2>
_END;

pintar_circulos('black', 'black', 'black', 'black');

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

if ($resultado != "") {
    echo "<h3>$resultado</h3>";

    echo "<p>Combinación correcta:</p>";
    pintar_circulos(
        $_SESSION['combinacioncorrecta'][0],
        $_SESSION['combinacioncorrecta'][1],
        $_SESSION['combinacioncorrecta'][2],
        $_SESSION['combinacioncorrecta'][3]
    );

    echo "<p>Tu combinación:</p>";
    pintar_circulos(
        $_SESSION['jugada'][0],
        $_SESSION['jugada'][1],
        $_SESSION['jugada'][2],
        $_SESSION['jugada'][3]
    );

    // Reiniciar para volver a jugar
    $_SESSION['jugada'] = [];
}


?>