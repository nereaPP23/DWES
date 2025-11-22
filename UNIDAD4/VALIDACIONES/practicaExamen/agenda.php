<?php

session_start();

$hn = 'localhost';
$db = 'agenda';
$un = 'root';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");


echo <<<_END
<html>
    <body>
        <h1>Agenda</h1>
        <h2>Hola $_SESSION[usuario]</h2>
    </body>
</html>
_END;

if(isset($_SESSION['contactos'])){
    $num = count($_SESSION['contactos']);
     echo "<form action='agenda.php' method='post'>";
     echo "<table border='1' >";
        echo "<tr>";
        for ($i = 0; $i < $num; $i++) {
            echo "<td>";
            echo "CONTACTO". ($i+1)."<br>";
            echo "<label for='numero$i'>Nombre" .($i+1).":</label><br>";
            echo "<input type='text' name='nombre$i' required><br>";
            echo "<label for='numero$i'>Email" .($i+1).":</label><br>";
            echo "<input type='email' name='email$i' required><br>";
            echo "<label for='numero$i'>Telefono" .($i+1).":</label><br>";
            echo "<input type='tel' name='numero$i' required><br>";
            echo "</td>";
        }
        echo "</table></tr>";
        
}


if (isset($_POST['submit'])) {
    $usuario = $_SESSION['usuario'];
    $query = "SELECT Codigo FROM usuarios WHERE Nombre = '$usuario'";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error");
    $row=$result->fetch_assoc();
    $codigousu = $row['Codigo'];

    for ($i = 0; $i < $num; $i++) {
        if (!empty($_POST['nombre'.$i]) && !empty($_POST['email'.$i]) && !empty($_POST['numero'.$i])){
            $nombre = $_POST['nombre'.$i];
            $email = $_POST['email'.$i];
            $numero = $_POST['numero'.$i];

            // Obtener el siguiente codcontacto
            $max = $connection->query("SELECT MAX(codcontacto) AS ultimo FROM contactos");
            $rowMax = $max->fetch_assoc();
            $codcontacto = $rowMax['ultimo'] + 1;

            $query2 = "INSERT INTO contactos (codcontacto, nombre, email, telefono, codusuario) VALUES ($codcontacto,'$nombre', '$email', '$numero', $codigousu)";
            $resultado = $connection->query($query2);
        }
    }
    $result->close();
    $connection->close();
    header("Location: grabado.php");
}

echo <<<_END
    <form action="form.php" method="post">
        <br><br><input type="submit" name="submit" value="Enviar">
    </form>

_END;



?>