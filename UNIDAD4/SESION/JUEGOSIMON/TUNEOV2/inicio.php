<?php

session_start();

unset($_SESSION['colores-escogidos']); //Para eliminar una variable de sesión previamente almacenada

$colores = array('red','blue','yellow','green');
$_SESSION['colores-correctos'] = array(
    $colores[rand(0,3)],
    $colores[rand(0,3)],
    $colores[rand(0,3)],
    $colores[rand(0,3)]
);

echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>

_END;

require 'pintar-circulos.php';
pintar_circulos(
    $_SESSION['colores-correctos'][0],
    $_SESSION['colores-correctos'][1],
    $_SESSION['colores-correctos'][2],
    $_SESSION['colores-correctos'][3]
);


echo <<<_END
    <form action="jugar.php" method="post">
        <input type="submit" name="submit" value="Vamos a jugar">
    </form>
    </body>
</html>
_END;
?>