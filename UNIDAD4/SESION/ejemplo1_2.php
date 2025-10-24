<?php
session_start();

$_SESSION['nombre']=$_POST['nombre'];

echo <<<_END

<html>
    <body>
        <form method="post" action="ejemplo1_3.php">
        <label for="jugador1">Jugador 1:</label><br>
        <input type="text" id="jugador1" name="jugador1"><br><br>

        <label for="jugador2">Jugador 2:</label><br>
        <input type="text" id="jugador2" name="jugador2"><br><br>

        <label for="jugador3">Jugador 3:</label><br>
        <input type="text" id="jugador3" name="jugador3"><br><br>

        <button type= "submit" value="Ver">Ver</button>
        </form>
    </body>

</html>
_END;
?>