<?php
session_start();
$hn = 'localhost';
$db = 'bdmemoria';
$un = 'root';
$pw = '';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");

if (isset($_POST['submit'])) {
    if (!empty($_POST['numcartas'])) {
        $numcartas = $_POST['numcartas'];
       $_SESSION['codigousu']=1;

        $_SESSION['numcartas'] = $numcartas;

       

        header("Location: inicio.php");
        exit();
    }
}
$connection->close();
?>

<html>
<body>
    <h2>Dificultad Memoria</h2>
    <form action="dificultad.php" method="post">
        <label>Elige número de cartas:</label>
        <select name="numcartas">
            <option value="8">8 (4 parejas)</option>
            <option value="12">12 (6 parejas)</option>
            <option value="16">16 (8 parejas)</option>
        </select>
        <input type="submit" name="submit" value="Jugar">
    </form>
</body>
</html>
