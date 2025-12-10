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

//guardar palabra en la tabla de jugadas con acierto 1
$query2 = "INSERT INTO jugadas (usuario_id, palabra, acierto, fecha) VALUES ($idUsuario, '$palabra', 1, '$fecha')";
$result2 = $connection->query($query2);

$result->close();
$connection->close();


echo <<<_END
<html>
    <body>
        <h1>Ahorcado</h1>
        <h2>Hola $usuario</h2>
        <p>¡Enhorabuena! Has acertado la palabra '$palabra'</p>
        <p>Ahora puedes jugar otra vez</p>
        <form action="inicio.php" method="post">
            <input type="submit" name="submit" value="Jugar">
        </form>
    </body>
    <a href="estadisticas.php">Estadísticas</a>
</html>

_END;
?>