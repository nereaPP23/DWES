<?php

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $profesion = $_POST['profesion'];
    $sexo = $_POST['sexo'];
    $navegadores = [];

    echo "Nombre: $nombre <br>";
    echo "Apellido: $apellido<br>";
    echo "Edad: $edad<br>";
    echo "Profesion: $profesion<br>";
    echo "Sexo: $sexo<br>";
    echo "Navegadores: ";
    if(isset($_POST['chrome'])){
       $navegadores[] = "Chrome";
    }
    if(isset($_POST['firefox'])){
        $navegadores[] = "Firefox";
    }
    if(isset($_POST['safari'])){
        $navegadores[] = "Safari";
    }
    if(!empty($navegadores)){
        echo implode(", ", $navegadores);
    }else{
        echo "No se ha seleccionado ningún navegador<br>";
    }

    
}else{

echo <<<_END
<html>
    <body>
        <form action="formularioCheckbox.php" method="post">
        <h2>Formulario de prueba</h2>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br><br>

            <label for="apellido">Apellido:</label><br>
            <input type="text" id="apellido" name="apellido"><br><br>

            <label for="edad">Edad:</label><br>
            <input type="number" id="edad" name="edad" min="1" max="110"><br><br>

            <label for="profesion">Profesión:</label><br>
            <select name="profesion" id="profesion">
                <option value="ingeniero">Ingeniero</option>
                <option value="policia">Policía</option>
                <option value="bombero">Bombero</option>
                <option value="informático">Informático</option>
                <option value="profesor">Profesor</option>    
            </select><br><br>

            <label for "sexo">Sexo:</label>
            <input type="radio" name="sexo" value="masculino">Masculino
            <input type="radio" name="sexo" value="femenino">Femenino
            <br><br>

            <label for="navegador">Navegador usado:</label><br>
            <input type="checkbox" name="chrome">Chrome
            <input type="checkbox" name="firefox">Firefox
            <input type="checkbox" name="safari">Safari
            <br><br>

            <button type="submit" name="submit">Enviar</button>
        </form>
    </body>
</html>
_END;
}
?>