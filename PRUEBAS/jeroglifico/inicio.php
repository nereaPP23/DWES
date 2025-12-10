<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$nombre=$_SESSION['nombre'];
$login =$_SESSION['login'];

if (isset($_POST['submit'])) {
    if (!empty($_POST['sol'])){
        $solucion=$_POST['sol'];
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        $query = "INSERT INTO respuestas (fecha, login, hora, respuesta)
        VALUES ('$fecha', '$login', '$hora', '$solucion')";
        $connection->query($query);
    }
}

$connection->close();

echo <<<_END
    <h1>Bienvenido $nombre</h1>
    <img src='imagen/20240216.jpg' width=300px>
    <form action="inicio.php" method="post">
        <label for="sol">Solucion al jeroglifico:</label>
        <input type="text" name="sol"><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <a href='puntos.php'>Ver puntos por jugador</a><br>
    <a href='resultado.php'>Resultados del dia</a><br>
_END;
?>