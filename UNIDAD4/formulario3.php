<?php
$suma = null;
if (isset($_POST['num1'])&&isset($_POST['num2'])) {
    $suma = $_POST['num1'] + $_POST['num2'];
   
}
?>

<html>
    <body>
        <form method ="post" action="formulario3.php">
            <label for="num1">Número 1:</label><br>
            <input type="number" id="num1" name="num1" required><br><br>

            <label for="num2">Número 2:</label><br>
            <input type="number" id="num2" name="num2" required><br><br>

            <button type="submit" value="suma">Suma</button>
        </form>
    </body>
</html>
<?php
if(!is_null($suma)){
    echo "<strong>El resultado es: $suma</strong>";
}
?>