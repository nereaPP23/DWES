<?php
session_start();

echo <<<_END
<html>
    <body>
        <form method="post" action="ejemplo1_2.php">
        <label for="jugador1">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <button type= "submit">Jugar</button>
        </form>
    </body>

</html>
_END;

?>