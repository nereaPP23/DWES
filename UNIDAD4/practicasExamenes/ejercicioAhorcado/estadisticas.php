<?php

session_start();

$hn = 'localhost';
$db = 'ahorcado';
$un = 'root';
$pw = '';


$usuario = $_SESSION['usuario'];

$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");


echo "<h1>Estadísticas</h1>";
echo "<h2>Hola $usuario</h2>";

$query = "SELECT u.nombre, COUNT(j.id) AS partidas, SUM(j.acierto) AS aciertos
    FROM usuarios u
    LEFT JOIN jugadas j ON u.id = j.usuario_id
    GROUP BY u.id, u.nombre";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error");



echo <<<_END
            <table border="1">
                <tr>
                    <th>Usuario</th>
                    <th>Partidas</th>
                    <th>Aciertos</th>
                    <th></th>
                </tr>
_END;


        $rows = $result->num_rows;
        for ($j = 0 ; $j < $rows ; ++$j) {
            $result->data_seek($j);
            echo '<tr>';
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['nombre']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['partidas']). '</td>';
            $result->data_seek($j);
            $aciertos = $result->fetch_assoc()['aciertos'];
            echo '<td>' .htmlspecialchars($aciertos). '</td>';
            echo "<td>";
            for ($i = 0; $i < $aciertos; $i++) {
                echo "<div style='width:10px; height:10px;margin-right:10px; border-radius:50%; background-color:red; border:2px solid #ff0000ff; display:inline-block;'></div>";
            }
            echo "</td>";
            echo "</tr>";
        }
        
        $result->close();
        $connection->close();

        echo "</table><br><br>";
        echo "<a href='index.php'>Volver a loguearse</a><br>";
?>