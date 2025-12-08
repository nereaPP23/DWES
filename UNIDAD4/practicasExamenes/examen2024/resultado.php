<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$fecha = date("Y-m-d");

//selecionamos la solucion del dia
$query = "SELECT solucion FROM solucion WHERE fecha = '$fecha'";
$result = $connection->query($query);
$solucionDia = "";
if ($result && $result->num_rows == 1) {
    $fila = $result->fetch_assoc();
    $solucionDia = $fila['solucion'];
}else{
    echo "No hay solucion registrada para hoy ($fecha)";
}
$result->close();

//suma puntos
$sumaPuntos=$connection-> query ("UPDATE jugador j SET puntos = puntos + 1 where login in 
( SELECT login FROM respuestas r, solucion where respuesta = solucion AND r.fecha = '$fecha');");

//aciertos
$aciertos = "SELECT login, hora FROM respuestas r
INNER JOIN solucion s ON r.fecha=s.fecha
WHERE r.respuesta=s.solucion AND r.fecha='$fecha'";
$resultA = $connection->query($aciertos);

//fallos
$fallos = "SELECT login, hora FROM respuestas r
INNER JOIN solucion s ON r.fecha=s.fecha
WHERE r.respuesta!=s.solucion AND r.fecha='$fecha'";
$resultF = $connection->query($fallos);



echo "<html><body>";
echo "<h1>Fecha: $fecha</h1>";

//cuenta las filas de acertantes con fecha hoy
echo "<h2>Jugadores acertantes: ".$resultA->num_rows."</h2>";
echo "<table border='1'>";
echo "<tr><th>Login</th><th>Hora</th></tr>";

while ($row = $resultA->fetch_assoc()) {
    echo "<tr><td>".$row['login']."</td><td>".$row['hora']."</td></tr>";
}

echo "</table>";

//cuenta las filas de fallos con fecha hoy
echo "<h2>Jugadores que han fallado: ".$resultF->num_rows."</h2>";
echo "<table border='1'>";
echo "<tr><th>Login</th><th>Hora</th></tr>";

while ($row = $resultF->fetch_assoc()) {
    echo "<tr><td>".$row['login']."</td><td>".$row['hora']."</td></tr>";
}
echo "</table>";

echo "</body></html>";
?>