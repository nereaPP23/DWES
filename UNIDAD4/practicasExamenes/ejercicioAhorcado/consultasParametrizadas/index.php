<?php
session_start();

$hn = 'localhost';
$db = 'ahorcado';
$un = 'root';
$pw = '';

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");

$error = '';

if (isset($_POST['submit'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        // Consulta preparada para evitar inyección SQL
        $stmt = $connection->prepare("SELECT * FROM usuarios WHERE nombre = ? AND clave = ?");
        $stmt->bind_param("ss", $usuario, $contrasenia);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $_SESSION['usuario'] = $usuario;
            header("Location: inicio.php");
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos";
        }

        $stmt->close();
    } else {
        $error = "Debes introducir usuario y contraseña";
    }
}

$connection->close();
?>
<html>
    <body>
        <h1>LOGIN</h1>
        <form action="index.php" method="post">
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario"><br><br>
            <label for="contrasenia">Contraseña:</label><br>
            <input type="password" name="contrasenia"><br><br>
            <input type="submit" name="submit" value="Entrar">
        </form>
        <p><?php echo $error; ?></p>
    </body>
</html>
