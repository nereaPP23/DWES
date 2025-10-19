<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (isset($_POST['suma'])) {
        $resultado = $num1 + $num2;
        echo "La suma de ".$num1." + ".$num2. " = ".$resultado."<br>";
    } elseif (isset($_POST['resta'])) {
        $resultado = $num1 - $num2;
        echo "La resta de ".$num1." - ".$num2. " = ".$resultado."<br>";
    } elseif (isset($_POST['multiplicacion'])) {
        $resultado = $num1 * $num2;
        echo "La multiplicación de ".$num1." * ".$num2. " = ".$resultado."<br>";
    } elseif (isset($_POST['division'])) {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "La división de ".$num1." / ".$num2. " = ".$resultado."<br>";
        } else {
            echo "Error: No se puede dividir por cero";
        }
    }
    echo <<<_END
    <h2>Formulario siguiente</h2>
    <form action="ejer3.php" method="post">
        <label for="num1">A:</label>
        <input type="number" name="num1" required>
        <br><br>
        <label for="num2">B:</label>
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" name="suma" value="Suma">
        <input type="submit" name="resta" value="Resta">
        <input type="submit" name="multiplicacion" value="Multiplicación">
        <input type="submit" name="division" value="División">
    </form>
_END;

} else {

echo <<<_END
    <h2>Formulario inicial</h2>
    <form action="ejer3.php" method="post">
        <label for="num1">A:</label>
        <input type="number" name="num1" required>
        <br><br>
        <label for="num2">B:</label>
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" name="suma" value="Suma">
        <input type="submit" name="resta" value="Resta">
        <input type="submit" name="multiplicacion" value="Multiplicación">
        <input type="submit" name="division" value="División">
    </form>
_END;
}
?>