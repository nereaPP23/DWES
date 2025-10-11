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
foreach ($array as $familia => $valor) {
    echo "<br><strong>Familia $familia</strong><br>";
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


//Opcion 2

/*implode() une los elementos de un array en una sola cadena
Sintaxis: implode(string $separador, array $array)

Ejemplo:

$array = array('Bart','Lisa','Maggie');
print implode(',',$array);

Resultado:
Bart, Lisa, Maggie

$array = array('Chris','Meg','Stewie');
print implode('-',$array);

Resultado:
Chris-Meg-Stewie

*/

echo "<h3>Opcion 2 (con implode)</h3>";
echo "<ul>";
foreach ($array as $familia => $valor) {
    echo "<br><strong>Familia $familia</strong><br>";
    foreach ($valor as $indice => $valor2) {
        if (is_array($valor2)) {
            echo "<li>$indice:";
                echo implode(", ", $valor2);
            echo "</li>";
        } else {
            echo "<li>$indice: $valor2</li>";
        }
    }
}
echo "</ul>";
?>