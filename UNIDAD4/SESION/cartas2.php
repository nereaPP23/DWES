<?php
session_start();
if (isset($_POST['numdecimal'])) {
    $numdecimal = intval($_POST['numdecimal']);
    if ($numdecimal == $_SESSION['decimalcorrecto']) {
        echo "<h2>Respuesta acertada el numero es $numdecimal</h2><br>";
    } else {
        echo "<h2>Has fallado vuelve a jugar</h2><br>";
    }
}

echo <<<_END
    <a href="cartas1.php">Volver a jugar</a>
_END;

?>