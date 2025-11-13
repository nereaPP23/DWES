<?php  

session_start();

$hn = 'localhost';
$db = 'bdsimon';
$un = 'root';
$pw = '';

try{
$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

$error='';


if (isset($_POST['submit'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasenia']) && !empty($_POST['contrasenia2'])){
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $contrasenia2 = $_POST['contrasenia2'];
    if ($contrasenia == $contrasenia2){
        $query = "INSERT INTO usuarios (Nombre, Clave) VALUES ('$usuario', '$contrasenia')";
        if ($connection->errno == 1062) {
            throw new Exception("El usuario ya existe");
        }else if ($contrasenia != $contrasenia2) {
        $error = "Las contraseñas no coinciden";
    }else{
        header("Location: login.php");
        exit();
    }
    }
 }
}
}catch(Exception $e){
    $error = $e->getMessage();
}
$connection->close();
    


;


echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Ingresa tus datos</h2>
            <form action="registro.php" method="post">
                <label for="usuario">Usuario:</label><br>
                <input type="text" name="usuario"><br><br>
                <label for="contrasenia">Contraseña:</label><br>
                <input type="password" name="contrasenia"><br><br>
                <label for="contrasenia2">Repita la contraseña:</label><br>
                <input type="password" name="contrasenia2"><br><br>
                <input type="submit" name="submit" value="Enviar">
            </form>
            <p>$error</p>
    </body>
</html>
_END;

?>