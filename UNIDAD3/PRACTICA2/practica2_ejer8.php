<?php

$matriz = array();

for ($i=0; $i<10; $i++) {
    for ($j=0; $j<10; $j++) {
        $matriz[$i][$j] = rand(1,100);
    }
}

$maxValor = $matriz[0][0];
$fila= 0;
$columna = 0;

echo "<h2>Matriz:</h2><br>";
foreach ($matriz as $fila) {
    foreach ($fila as $columna) {
        echo "$columna\t";
    }
    echo "<br>";
}

for ($i=0; $i<10; $i++) {
    for ($j=0; $j<10; $j++) {
        if ($matriz[$i][$j] > $maxValor) {
            $maxValor = $matriz[$i][$j];
            $fila = $i;
            $columna = $j;
        }
    }
}

echo "<br><br>El valor máximo de la matriz es: $maxValor<br>";
echo "La fila con el valor máximo es: " .($fila+1) ."<br>";
echo "La columna con el valor máximo es: " .($columna+1) ."<br>";
?>