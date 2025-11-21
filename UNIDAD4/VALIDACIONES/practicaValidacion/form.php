<?php

$hn = 'localhost';
$db = 'validacionbd';
$un = 'root';
$pw = '';



$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");

    $errorNom='';
    $errorMail='';
    $errorContrasena='';
    $errorConfirmarContrasena='';
    $errorWeb='';
    $errorGenero='';

    $nombre = '';
    $email = '';
    $contrasena = '';
    $web = '';
    $comentario = '';
    $genero = '';
    $resultado2 = '';
    



if (isset($_POST['submit'])) {
        if (empty($_POST['nombre'])){
            $errorNom = 'El campo nombre es obligatorio';
        }elseif (!preg_match('/^[a-zA-Z\s]+$/', $_POST['nombre'])){
            $errorNom = 'El campo nombre solo puede contener letras y espacios';
        }else {
            $nombre = $_POST['nombre'];
        }

        if (empty($_POST['email'])){
            $errorMail = 'El campo email es obligatorio';
        }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errorMail = 'El campo email no es valido';
        }else {
            $email = $_POST['email'];
        }

        if (empty($_POST['genero'])){
            $errorGenero = 'El campo genero es obligatorio';
        }else {
            $genero = $_POST['genero'];
        }

        if(!empty($_POST['web'])){
            if(!filter_var($_POST['web'], FILTER_VALIDATE_URL)){
                $errorWeb = 'El campo web no es valido';
            }else {
                $web= $_POST['web'];
            }
        }else{
            $web= '';
        }

        if (empty($_POST['comentario'])){
            $comentario = '';
        }else {
            $comentario = $_POST['comentario'];
        }


        if (empty($_POST['contrasena'])){
            $errorContrasena = 'El campo contraseña es obligatorio';
        }elseif (!preg_match ('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z0-9]).+$/', $_POST['contrasena'])){
            $errorContrasena = 'La contraseña debe contener al menos una letra, un número y un caracter especial';
        } else {
            $contrasena = $_POST['contrasena'];
        }

        if (empty($_POST['confirmar-contrasena'])){
            $errorConfirmarContrasena = 'Debe confirmar la contraseña';
        } elseif ($_POST['contrasena'] != $_POST['confirmar-contrasena']){
            $errorConfirmarContrasena = 'Las contraseñas no coinciden';
        }else {
            $confirmarContrasena = $_POST['confirmar-contrasena'];
        }


        if ($errorNom == '' && $errorMail == '' && $errorContrasena == '' && $errorConfirmarContrasena == '' && $errorGenero == ''){
            $password = password_hash($contrasena, PASSWORD_DEFAULT);
            $query = "INSERT INTO usuarios (nombre, email, clave, web, comentario, genero) VALUES ('$nombre', '$email', '$password', '$web', '$comentario', '$genero')";
            $resultado = $connection->query($query);
            if ($resultado){
                $resultado2 = 'El registro se ha realizado correctamente';
            }else{
                $resultado2 = 'Error al realizar el registro';
            }
            }else{
                $resultado2 = 'Error al realizar el registro';
        }
}
    
   



 echo <<<_END
<html>
    <body>
        <h2>Formulario de validación</h2>
        <form action="form.php" method="post">
            <p style="color:red">*required fields</p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><span style="color:red">*$errorNom</span><br><br>
            <label for="email">Email</label>
            <input type="email" name="email"><span style="color:red">*$errorMail</span><br><br>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena"><span style="color:red">*$errorContrasena</span><br><br>
            <label for="confirmar-contrasena">Confirmar contraseña</label>
            <input type="password" name="confirmar-contrasena"><span style="color:red">$errorConfirmarContrasena</span><br><br>
            <label for ="web">Website</label>
            <input type="text" name="web"><span style="color:red">$errorWeb</span><br><br>
            <label for="comentario">Comentario</label>
            <textarea id="comentario" name="comentario" rows="5" cols="50"></textarea><br><br>
            <label for ="genero">Genero</label>
            <input type="radio" name="genero" value="Masculino">Masculino
            <input type="radio" name="genero" value="Femenino">Femenino <span style="color:red">*$errorGenero</span><br><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>

_END;

echo "<h2>Your Input</h2>";
echo $nombre."<br>";
echo $email."<br>";
echo $web."<br>";
echo $comentario."<br>";
echo $genero."<br><br>";
if (!empty($resultado2)){
    echo "<h2>Registro</h2><br>";
    echo $resultado2;
}
?>