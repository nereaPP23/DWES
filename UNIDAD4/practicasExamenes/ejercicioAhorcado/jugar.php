<?php

session_start();


$usuario = $_SESSION['usuario'];
$palabra = $_SESSION['palabra'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

$mensaje = '';
// Procesar intento
if (isset($_POST['letra'])) {
    $letra = strtolower($_POST['letra']); // normalizamos a minúscula


    //strpos para ver si la letra aparece en $palabra
    if (strpos($palabra, $letra) !== false) {
        // La letra está en la palabra
        $aciertos[] = $letra;
        $_SESSION['aciertos'] = $aciertos;
        $mensaje = "¡Bien! La letra '$letra' está en la palabra.";
    } else {
        // La letra no está
        $fallos++;
        $_SESSION['fallos'] = $fallos;
        $mensaje = "Fallaste, la letra '$letra' no está.";
    }
}

// Construir palabra oculta
$mostrar = "";
$completada = true;
for ($i = 0; $i < strlen($palabra); $i++) {
    $char = $palabra[$i];
    if (in_array($char, $aciertos)) {
        $mostrar .= $char . " ";
    } else {
        $mostrar .= "_ ";
        $completada = false;
    }
}

// Comprobar fin de juego
if ($completada) {
    header("Location: acierto.php");
    exit();
}
if ($fallos >= 6) {
    header("Location: fallo.php");
    exit();
}



echo <<<_END
<html>
    <body>
        <h1>Ahorcado</h1>
        <h2>Hola $usuario</h2>
        <p>$mostrar</p>
        <p>Fallos: $fallos> / 6</p>
        <form action="jugar.php" method="post">
            <label>Introduce una letra:</label>
            <input type="text" name="letra" maxlength="1" required>
            <input type="submit" value="Probar">
        </form>
        <p>$mensaje</p>
    </body>
</html>



_END;

?>

