<?php
session_start();

$hn = 'localhost';
$db = 'oposicion';
$un = 'root';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");



$dni = $_SESSION['dniP'];
$nombre = $_SESSION['nombreP'];

    $query = "SELECT codigocurso, nombrecurso,maxalumnos,fechaini, fechafin, numhoras, profesor FROM curso  WHERE profesor='$dni';";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");



    echo "<span style='background-color:orange'>PROFESOR $dni</span><span style='background-color:lightblue'>NOMBRE $nombre</span>";


echo <<<_END
            <table border="1">
                <tr>
                    <th>codigocurso</th>
                    <th>nombrecurso</th>
                    <th>maxalumnos</th>
                    <th>fechaini</th>
                    <th>fechafin</th>
                    <th>numhoras</th>
                    <th>profesor</th>
                </tr>
_END;

$rows = $result->num_rows;
        for ($j = 0 ; $j < $rows ; ++$j) {
            $result->data_seek($j);
            echo '<tr>';
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['codigocurso']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['nombrecurso']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['maxalumnos']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['fechaini']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['fechafin']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['numhoras']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['profesor']). '</td>';
            echo "</tr>";
        }
        
        $result->close();
        $connection->close();
        echo "</table><br><br>";
        echo "<span style='background-color:lightblue'>Total horas impartidas:</span><br>";
        echo "<span style='background-color:lightblue'></span>";
?>