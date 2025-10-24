<?php

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $profesion = $_POST['profesion'];
    $sexo = $_POST['sexo'];
    $navegadores = isset($_POST['navegador']) ? $_POST['navegador'] : array();

    echo "El nombre es $nombre <br>";
    echo "El apellido es $apellido<br>";
    echo "La edad es $edad<br>";
    echo "La profesión es $profesion<br>";
    echo "El sexo es $sexo<br>";

    if(!empty($navegadores)){
        echo "Los navegadores usados son:<br>";
        foreach ($navegadores as $navegador) {
            echo "- $navegador<br>";
        }
    }else{
        echo "No se ha seleccionado ningún navegador<br>";
    }

}else{

echo <<<_END
<html>
    <body>
        <form action="formularioConArray.php" method="post">
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
                <option value="arquitecto">Arquitecto</option>
                <option value="diseñador">Diseñador</option>
                <option value="administrador">Administrador</option>
                <option value="gerente">Gerente</option>    
            </select><br><br>

            <label for "sexo">Sexo:</label>
            <input type="radio" name="sexo" value="masculino">Masculino\n
            <input type="radio" name="sexo" value="femenino">Femenino
            <br><br>

            <label for="navegador">Navegador usado:</label><br>
            <input type="checkbox" name="navegador[]" value="chrome">Chrome\n
            <input type="checkbox" name="navegador[]" value="firefox">Firefox\n
            <input type="checkbox" name="navegador[]" value="safari">Safari
            <br><br>

            <button type="submit" name="submit">Enviar</button>
        </form>
    </body>
</html>
_END;
}
?>