<?php

$array = array(
    'Los Simpsons'=>array(
        'Padre'=>'Homer',
        'Madre'=>'Marge',
        'Hijos'=>array('Bart','Lisa','Maggie')
    ),
    'Los Griffins'=>array(
        'Padre'=>'Peter',
        'Madre'=>'Lois',
        'Hijos'=>array('Chris','Meg','Stewie')
    ),
);  

echo "<ul>";
foreach ($array as $valor) {
    foreach ($valor as $indice => $valor2) {
        if (is_array($valor2)) {
            echo "<li>$indice:<ul>";
            foreach ($valor2 as $valor3) {
                echo "<li>$valor3</li>";
            }
            echo "</ul></li>";
        } else {
            echo "<li>$indice: $valor2</li>";
        }
    }
}
echo "</ul>";
?>