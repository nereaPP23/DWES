<?php

session_start();

$hn = 'localhost';
$db = 'ahorcado';
$un = 'root';
$pw = '';


$usuario = $_SESSION['usuario'];

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");


 //selecionar palabra aleatoria
 $query = "SELECT palabra FROM palabras ORDER BY RAND() LIMIT 1";
 $result = $connection->query($query);
 if (!$result) die("Fatal Error");


$row = $result->fetch_assoc();
print_r($row);
$palabra = $row['palabra'];

//guadar en sesion
$_SESSION['palabra'] = $palabra;
$_SESSION['aciertos'] = array();   // letras acertadas
$_SESSION['fallos'] = 0;           // contador de fallos

$longitud = strlen($palabra);

$result->close();
$connection->close();


echo <<<_END
<html>
    <body>
        <h1>Ahorcado</h1>
        <h2>Hola $usuario</h2>
        <p>La palabra tiene $longitud letras, vamos a jugar</p>
        <form action="jugar.php" method="post">
            <input type="submit" name="submit" value="Jugar">
        </form>
    </body>
</html>

_END;
?>