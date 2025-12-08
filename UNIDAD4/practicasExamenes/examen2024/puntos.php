<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';

$login = $_SESSION['login'];

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

echo "<h1>Puntos por jugador</h1>";


$query = "SELECT login, puntos FROM jugador";
$result = $connection->query($query);
if (!$result) die("Fatal Error");


echo <<<_END
        <table border="1">
            <tr>
                <th>Login</th>
                <th>Puntos</th>
                <th></th>
            </tr>
_END;


    $rows = $result->num_rows;
        for ($j = 0 ; $j < $rows ; ++$j) {
            $result->data_seek($j);
            echo '<tr>';
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['login']). '</td>';
            $result->data_seek($j);
            $puntos = $result->fetch_assoc()['puntos'];
            echo '<td>' .htmlspecialchars($puntos). '</td>';
            echo "<td>";
            for ($i = 0; $i < $puntos; $i++) {
                echo "<div style='width:1px; height:15px;background-color:#00ffeaff; display:inline-block;'></div>";
            }
            echo "</td>";
            echo "</tr>";
        }
        
        $result->close();
        $connection->close();

        echo "</table><br><br>";
?>