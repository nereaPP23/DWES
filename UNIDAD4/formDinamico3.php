<?php

if(isset($_POST['submit'])){
    echo'<form action="formDinamico3.php" method="post">';
        echo '
            <label for="nombre">Numero de Elementos:</label>
                <input type="text" id="numero" name="numero"><br>';
                echo '<input type="submit" name="Aceptar" value="Aceptar">';
        echo'</form>';
        if(isset($_POST['Aceptar'])){
            $numero_de_elementos=$_POST['numero'];  
        
            echo '<form action="Ejercicio6Unidad4.php" method="post">';
            for ($i = 0; $i < $numero_de_elementos; $i++) { 
                echo '
                    <label for="nombre">'.($i+1).':</label>
                    <input type="text" id="'.$i.'" name="'.$i.'"><br>';

            }
            echo '<input type="submit" name="submit" value="Enviar">';
            echo '</form>';
        }
}

//comprobamos si el formulario ha sido enviado
if (isset($_POST['num1'])) {
    //var_dump($_POST);


    //mostramos los valores del formulario
    for ($i = 0; $i <= 'numero'; $i++) {
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
    for ($i = 0; $i <= 'numero'; $i++) {
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