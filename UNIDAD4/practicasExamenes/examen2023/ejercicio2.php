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
$totalHoras = 0;


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

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['codigocurso']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nombrecurso']) . "</td>";
        echo "<td>" . htmlspecialchars($row['maxalumnos']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fechaini']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fechafin']) . "</td>";
        echo "<td>" . htmlspecialchars($row['numhoras']) . "</td>";
        echo "<td>" . htmlspecialchars($row['profesor']) . "</td>";
        echo "</tr>";

    $totalHoras += $row['numhoras'];
    }
        
        $result->close();
        $connection->close();
        echo "</table><br><br>";
        echo "<span style='background-color:lightblue'>Total horas impartidas:$totalHoras</span>";
        echo "<span style='background-color:lightblue'></span>";
?>