<?php  

session_start();

$hn = 'localhost';
$db = 'oposicion';
$un = 'root';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$error='';


 if (isset($_POST['submit'])) {
    if (!empty($_POST['dni'])){
    $dni = $_POST['dni'];


     $queryP = "SELECT dniP, nombreP FROM profesor WHERE dniP = '$dni'";
     $result = $connection->query($queryP);
     if (!$result) die("Fatal Error");
     $rows = $result->num_rows;
     if ($rows == 1) {
        $fila = $result->fetch_assoc();
        $_SESSION['dniP']= $fila['dniP'];
        $_SESSION['nombreP'] = $fila['nombreP'];
         header("Location: ejercicio2.php");
         exit();
     }else {
         $error = "Usuario o contraseña incorrectos";
     }
    $result->close();


    $queryA = "SELECT dniA, nombreA FROM alumno WHERE dniA = '$dni'";
     $result = $connection->query($queryA);
     if (!$result) die("Fatal Error");
     $rows = $result->num_rows;
     if ($rows == 1) {
        $fila = $result->fetch_assoc();
        $_SESSION['dniA']= $fila['dniA'];
        $_SESSION['nombreA'] = $fila['nombreA'];
         header("Location: ejercicio3.php");
         exit();
     }else {
         $error = "Usuario o contraseña incorrectos";
     }
    $result->close();

    }
 }


    $connection->close();
echo <<<_END
<html>
    <body>
        <h1>Agenda de contactos</h1>
            <form action="ejercicio1.php" method="post">
                <label for="dni">DNI:</label><br>
                <input type="text" name="dni"><br><br>
                <input type="submit" name="submit" value="Entrar">
            </form>
            <p>$error</p>
    </body>
</html>
_END;

?>