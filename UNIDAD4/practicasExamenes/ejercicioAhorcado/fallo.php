<?php

session_start();

$hn = 'localhost';
$db = 'ahorcado';
$un = 'root';
$pw = '';


$usuario = $_SESSION['usuario'];
$palabra = $_SESSION['palabra'];
$fecha = date("Y-m-d");

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$query = "SELECT id FROM usuarios WHERE nombre = '$usuario'";
$result = $connection->query($query);
if (!$result) die("Fatal Error");

$idUsuario = $result->fetch_assoc()['id'];

//guardar palabra en la tabla de jugadas con acierto 0
$query2 = "INSERT INTO jugadas (usuario_id, palabra, acierto, fecha) VALUES ($idUsuario, '$palabra', 0, '$fecha')";
$result2 = $connection->query($query2);

$result->close();
$connection->close();


echo <<<_END
<html>
    <body>
        <h1>Ahorcado</h1>
        <h2>Hola $usuario</h2>
        <p>Lo siento, no has conseguido acertar la palabra '$palabra'</p>
        <p>Ahora puedes jugar otra vez</p>
        <form action="inicio.php" method="post">
            <input type="submit" name="submit" value="Jugar">
        </form>
        <a href="estadisticas.php">Estadísticas</a>
    </body>
</html>

_END;
?>