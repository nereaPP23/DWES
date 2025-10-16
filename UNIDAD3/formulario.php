<?php
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    $suma = $numero1 + $numero2;
    echo "El resultado es: $suma";
} 
else echo <<<_END

<html>
<head>
   
</head>
<body>
    <form action="formulario.php" method="post">
    <label for="numero1">Número 1:</label><br>
    <input type="number" id="numero1" name="numero1" required><br><br>

    <label for="numero2">Número 2:</label><br>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <button type="submit">Suma</button>
  </form>
</body>
</html>
_END;

?>