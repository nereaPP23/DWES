<?php

session_start();

unset($_SESSION['colores-escogidos']); //Para eliminar una variable de sesión previamente almacenada
unset($_SESSION['colores-correctos']); 

$_SESSION['numero'] = intval($_POST['numero']);
$_SESSION['numero-colores'] = intval($_POST['numero-colores']);

$colores = array('red','blue','yellow','green','purple','orange','pink','brown');
for ($i = 0; $i < $_SESSION['numero']; $i++) {
    $_SESSION['colores-correctos'][$i] = $colores[rand(0,3)];
}

echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>

_END;

require 'pintar-circulos.php';
pintar_circulos($_SESSION['colores-correctos']);


echo <<<_END
    <form action="jugar.php" method="post">
        <input type="submit" name="submit" value="Vamos a jugar">
    </form>
    </body>
</html>
_END;
?>