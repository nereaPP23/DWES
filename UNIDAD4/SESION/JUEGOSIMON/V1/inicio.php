<?php

session_start();

unset($_SESSION['colores-escogidos']);

$colores = array('red','blue','yellow','green');
$_SESSION['colores-correctos'] = array(
    $colores[rand(0,3)],
    $colores[rand(0,3)],
    $colores[rand(0,3)],
    $colores[rand(0,3)]
);

echo 
    <<<END
        <form method="post" action="jugar.php">
            <h1>SIMÓN</h1>
            <p>paco pulsa los botones en el orden correspondiente </p>
    END;


require 'pintar-circulos.php';
pintar_circulos(
    $_SESSION['colores-correctos'][0],
    $_SESSION['colores-correctos'][1],
    $_SESSION['colores-correctos'][2],
    $_SESSION['colores-correctos'][3]
);


echo '<input type="submit" value="Vamos a jugar">';
echo '</form>';

?>