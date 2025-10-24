<?php

//comprobamos si el formulario ha sido enviado
if (isset($_POST['num1'])) {
    //var_dump($_POST);


    //mostramos los valores del formulario
    for ($i = 0; $i <= 10; $i++) {
            $numero = $_POST["num$i"];
            echo "El numero $i es: $numero <br>";
    }    
        
        
}else {
         echo <<<_END
    <html>
        <head>
            <title>Formulario Dinámico</title>
        </head>
        <body>
            <form method="post" action="formDinamico2.php">
_END;

    // Generamos inputs 
    for ($i = 0; $i <= 10; $i++) {
        echo '<label for="num' . $i . '">Número ' . $i . ':</label><br>';
        echo '<input type="number" id="num' . $i . '" name="num' . $i . '" required><br><br>';
    }

    echo <<<_END
                <button type="submit" name="enviar">Mostrar</button>
            </form>
        </body>
    </html>
_END;
}
?>