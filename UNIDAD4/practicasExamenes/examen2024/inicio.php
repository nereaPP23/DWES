<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';

$login = $_SESSION['login'];

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

if (isset($_POST['submit'])){
    if(!empty($_POST['sol'])){
        $solucion = $_POST['sol'];
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");

        $query="INSERT INTO respuestas (fecha, login, hora, respuesta) 
                VALUES ('$fecha', '$login', '$hora', '$solucion')";
        $connection->query($query);
    

    }
}

    $connection->close();

echo <<<_END

<html>
    <body>
        <h1>Bienvenido, {$_SESSION['nombre']}</h1>
        <img src="imagen/20240216.jpg" alt"imagen" width=300px>
            <form action="inicio.php" method="post">
                <label for="sol">Solucion al jeroglifico:</label>
                <input type="text" name="sol"><br><br>
                <input type="submit" name="submit" value="Enviar">
            </form>
            <a href='index.php'>Ver puntos por jugador</a><br>
            <a href='resultado.php'>Resultados del dia</a><br>
    </body>
</html>

_END;

?>