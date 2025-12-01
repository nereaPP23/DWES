<?php

session_start();

$hn = 'localhost';
$db = 'jeroglifico';
$un = 'jugador';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$error='';


 if (isset($_POST['submit'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])){
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    


     $query = "SELECT login, nombre FROM jugador WHERE login = '$usuario' AND clave = '$contrasenia'";
     $result = $connection->query($query);
     if (!$result) die("Fatal Error");
     $rows = $result->num_rows;
     if ($rows == 1) {
        $fila = $result->fetch_assoc();
        $_SESSION['login'] = $fila ['login'];
        $_SESSION['nombre']  = $fila['nombre'];
       
         header("Location: inicio.php");
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
        <h1>Iniciar sesión</h1>
            <form action="index.php" method="post">
                <label for="usuario">Usuario:</label><br>
                <input type="text" name="usuario"><br><br>
                <label for="contrasenia">Contraseña:</label><br>
                <input type="password" name="contrasenia"><br><br>
                <input type="submit" name="submit" value="Entrar">
            </form>
            <p style="color:red">$error</p>
    </body>
</html>
_END;
                                            
?>

