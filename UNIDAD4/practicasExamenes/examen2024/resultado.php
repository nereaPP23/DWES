<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$fecha = date("Y-m-d");

$query = "SELECT solucion FROM solucion WHERE fecha = '$fecha'";
$result = $connection->query($query);
$solucionDia = "";
if ($result && $result->num_rows == 1) {
    $fila = $result->fetch_assoc();
    $solucionDia = $fila['solucion'];
}
$result->close();

$queryResp = "SELECT login, hora, respuesta FROM respuestas WHERE fecha = '$fecha'";
$resultResp = $connection->query($queryResp);

$aciertos = [];
$fallos = [];


echo <<<_END
<html>
    <body>
        <h1>Fecha: $fecha</h1>
        <h2>Jugadores acertantes: </h2>
    </body>
</html>
_END;
?>