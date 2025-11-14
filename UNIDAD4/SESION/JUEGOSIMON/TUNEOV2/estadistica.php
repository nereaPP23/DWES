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
<html>
    <body>
        <h1>SIMÓN</h1>
_END;

        echo "<h2>$_SESSION[usuario], los resultados son:</h2>";

echo <<<_END
            <table border="1">
                <tr>
                    <th>Codigo usuario</th>
                    <th>Nombre</th>
                    <th>Numero aciertos</th>
                </tr>
_END;


$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j) {
    echo '<tr>';
    $result->data_seek($j);
    echo '<td>' .htmlspecialchars($result->fetch_assoc()['Codigo']). '</td>';
    $result->data_seek($j);
    echo '<td>' .htmlspecialchars($result->fetch_assoc()['Nombre']). '</td>';
    $result->data_seek($j);
    echo '<td>' .htmlspecialchars($result->fetch_assoc()['acierto']). '</td>';
    echo "</tr>";
    
 }









 
 $result->close();

  

echo <<<_END
    </table>
    </body>
</html>
_END;

echo "<br>";
echo "Nivel de dificultad: ";
echo <<<_END
<form action="estadistica.php" method="post">
        <label for="numero">Numero de circulos</label>
        <select name="numero">
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <label for="numero-colores">numero de colores </label>
        <select name="numero-colores">
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select><br><br>
        <input type="submit" name="submit" value="Estadisticas">
        </form>

_END;
echo "<br>";
echo "<a href='dificultad.php'>Volver a jugar</a><br><br>";

$connection->close();

?>