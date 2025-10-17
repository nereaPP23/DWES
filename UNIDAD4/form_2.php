<?php
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    switch ($_POST['operacion']) {
    case 'suma':
        $resultado = $_POST['numero1'] + $_POST['numero2'];
        echo "El resultado de la suma es $resultado";
        break;
    case 'resta':
        $resultado = $_POST['numero1'] - $_POST['numero2'];
         echo "El resultado de la resta es $resultado";
        break;
    case 'multiplicacion':
        $resultado = $_POST['numero1'] * $_POST['numero2'];
         echo "El resultado de la multiplicación es $resultado";
        break;
    case 'division':
        $resultado = $_POST['numero1'] / $_POST['numero2'];
         echo "El resultado de la división es $resultado";
        break;
    default:
        $resultado = "Operación no válida";
}

} else {
    echo <<<_END
        <html>
            <body>
                <form action="form_2.php" method="post">
                    <label for="numero1">Número 1:</label><br>
                    <input type="number" id="numero1" name="numero1" required><br><br>

                    <label for="numero2">Número 2:</label><br>
                    <input type="number" id="numero2" name="numero2" required><br><br>

                    <label for="operacion">Operación:</label><br>
                    <select name="operacion" id="operacion">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicación</option>
                        <option value="division">División</option>
                    </select><br><br>


                    <button type="submit">Enviar</button>
                </form>
            </body>
        </html>
     _END;
    } 


?>