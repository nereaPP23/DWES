<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {

    // Tomamos los valores enviados
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);
    $operacion = $_POST['operacion'];

    // Calculamos según la operación elegida
    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            if (empty($numero2)) {
                $resultado = "❌ Error: no se puede dividir entre cero.";
            } else {
                $resultado = $numero1 / $numero2;
            }
            break;
        default:
            $resultado = "Operación no válida.";
    }

    // Mostramos solo el resultado (sin los inputs)
    echo <<<_END
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <h2>Resultado:</h2>
        <p>El resultado de la <strong>$operacion</strong> es: <strong>$resultado</strong></p>
        <br>
        <a href="pruebaForm.php">🔁 Volver a calcular</a>
    </body>
    </html>
    _END;

} else {
    // Si no se ha enviado nada, mostramos el formulario
    echo <<<_END
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h2>Calculadora simple</h2>
        <form method="post" action="pruebaForm.php">
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

            <button type="submit">Calcular</button>
        </form>
    </body>
    </html>
    _END;
}
?>