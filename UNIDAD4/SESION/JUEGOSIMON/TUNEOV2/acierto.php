<?php
session_start();
require 'pintar-circulos.php';

$hn = 'localhost';
$db = 'bdsimon';
$un = 'root';
$pw = '';



$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");
 $usuario = $_SESSION['usuario'];
    $query = "SELECT Codigo FROM usuarios WHERE Nombre = '$usuario'";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error");
    $row=$result->fetch_assoc();
    $codigousu = $row['Codigo'];

    $query2 = "INSERT INTO jugadas (codigousu, acierto) VALUES ($codigousu, 1)";
        if (!$connection->query($query2)) die("Fatal Error");

        $result->close();
        $connection->close();

$colores_correctos = $_SESSION['colores-correctos'];

echo "<h2>¡Enhorabuena $usuario, has acertado la combinación!</h2>";

pintar_circulos($colores_correctos);

echo '<br><a href="dificultad.php">Volver a jugar</a><br><br>';
echo "<a href='estadistica.php'>Estadísticas</a>";
?> 