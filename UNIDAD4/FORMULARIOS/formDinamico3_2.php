<?php
 echo <<<_END
        <html>
            <body>
    _END;

if (isset($_POST['enviar2']) && !empty($_POST['num'])) {
    // genera inputs dinámicos
    $num = intval($_POST['num']);
    echo "<form action='pruebaFormDinamico2.php' method='post'>";
        for ($i = 0; $i < $num; $i++) {
            echo "<label for='numero$i'>Número $i:</label><br>";
            echo "<input type='number' id='numero$i' name='numero$i' required><br><br>";
        }
        echo "<input type='hidden' name='num' value='$num'>";
          echo "<button type='submit' name='enviar' value='enviar'>Enviar</button>";
          echo "</form>";

} elseif (isset($_POST['enviar'])&& !empty($_POST['num'])) {
    // mostrar resultados
        $num = intval($_POST['num']);
        for ($i = 0; $i < $num; $i++) {
            echo "El numero $i es:".  $_POST["numero$i"] ."<br>";   
        }
}else{
    // primer formulario: número de campos
        echo "<form action='formDinamico3_2.php' method='post'>";
        echo "<label for='num'>Número de campos:</label><br>";
        echo "<input type='number' id='num' name='num' required><br><br>";
        echo "<button type='submit' name='enviar2' value='enviar2'>Enviar</button>";
        echo "</form>";
    }
    

        
       
    echo <<<_END
            </body>
        </html>
    _END;


?>