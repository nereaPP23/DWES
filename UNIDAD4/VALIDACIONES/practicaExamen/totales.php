<?php

session_start();


$hn = 'localhost';
$db = 'agenda';
$un = 'root';
$pw = '';


$num = count($_SESSION['contactos']);

echo "<h1>Agenda</h1>";
echo "<h2>Hola $_SESSION[usuario]</h2>";

    
$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

    $query = "SELECT u.Codigo, u.Nombre, COUNT(c.codcontacto)AS numContactos FROM usuarios u LEFT JOIN contactos c ON u.Codigo = c.codusuario GROUP BY u.Codigo;";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");



echo <<<_END
            <table border="1">
                <tr>
                    <th>Codigo usuario</th>
                    <th>Nombre</th>
                    <th>Numero contactos</th>
                    <th>Grafica</th>
                </tr>
_END;


        $rows = $result->num_rows;
        for ($j = 0 ; $j < $rows ; ++$j) {
            $result->data_seek($j);
            echo '<tr>';
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['Codigo']). '</td>';
            $result->data_seek($j);
            echo '<td>' .htmlspecialchars($result->fetch_assoc()['Nombre']). '</td>';
            $result->data_seek($j);
            $numContactos = $result->fetch_assoc()['numContactos'];
            echo '<td>' .htmlspecialchars($numContactos). '</td>';
            echo "<td>";
            for ($i = 0; $i < $numContactos; $i++) {
                echo "<div style='width:10px; height:10px;margin-right:10px; border-radius:50%; background-color:red; border:2px solid #ff0000ff; display:inline-block;'></div>";
            }
            echo "</td>";
            echo "</tr>";
        }
        
        $result->close();
        $connection->close();

        echo "</table><br><br>";
        echo "<a href='index.php'>Volver a loguearse</a><br>";
        echo "<a href='inicio.php'>Introducir mas contactos para $_SESSION[usuario]</a><br>";

?>