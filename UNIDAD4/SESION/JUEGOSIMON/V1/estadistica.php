<?php

session_start();

$hn = 'localhost';
$db = 'bdsimon';
$un = 'root';
$pw = '';



$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

    $query = "SELECT u.Codigo, u.Nombre, COUNT(j.acierto) AS acierto FROM usuarios u LEFT JOIN jugadas j ON u.Codigo = j.codigousu GROUP BY u.Codigo";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");


echo <<<_END
            <table border="1">
                <tr>
                    <th>Codigo usuario</th>
                    <th>Nombre</th>
                    <th>Numero aciertos</th>
                    <th>Grafica</th>
                </tr>
_END;




       
while($row=$result->fetch_assoc()){
     echo "<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['acierto']."</td></tr>";
}



echo <<<_END
    </table>
    </body>
</html>
_END;

echo "<br>";
echo "<a href='dificultad.php'>Volver a jugar</a><br><br>";

$connection->close();

?>