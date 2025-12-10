<?php
session_start();
require 'pintar_tablero.php';

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['pos'])) {
    $pos = $_POST['pos'];
    $_SESSION['descubiertas'][$pos] = true;

    // Guardamos la jugada temporal
    if (!isset($_SESSION['jugada'])) {
        $_SESSION['jugada'] = [$pos];
    } else {
        $_SESSION['jugada'][] = $pos;

        // Si hay dos cartas levantadas
        if (count($_SESSION['jugada'])==2) {
            $p1 = $_SESSION['jugada'][0];
            $p2 = $_SESSION['jugada'][1];

            if ($_SESSION['tablero'][$p1] != $_SESSION['tablero'][$p2]) {
                // No coinciden → volver a tapar
                $_SESSION['descubiertas'][$p1] = false;
                $_SESSION['descubiertas'][$p2] = false;
            }
            $_SESSION['jugada'] = [];
        }
    }
}

// Comprobar si todas están descubiertas
if (!in_array(false,$_SESSION['descubiertas'])) {
    header("Location: acierto.php");
    exit;
}

echo "<h1>Juego de Memoria</h1>";
pintar_tablero($_SESSION['tablero'],$_SESSION['descubiertas']);
?>
