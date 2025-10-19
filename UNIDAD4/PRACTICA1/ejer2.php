<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <form action="ejer2Resultado.php" method="post">
        <input type="radio" value="edad1" name="edad">
        <label for="edad1">Menos de 14 años</label>
        <br>
        <input type="radio" value="edad2" name="edad">
        <label for="edad2">De 15 a 20 años</label>
        <br>
        <input type="radio" value="edad3" name="edad">
        <label for="edad3">De 21 a 40 años</label>
        <br>
        <input type="radio" value="edad4" name="edad">
        <label for="edad4">De 41 a 60 años</label>
        <br>
        <input type="radio" value="edad5" name="edad">
        <label for="edad5">Mas de 60 años</label>
        <br>
        <button type="submit" name="enviar" value="submit">Resultado</button>
    </form>
</body>
</html>