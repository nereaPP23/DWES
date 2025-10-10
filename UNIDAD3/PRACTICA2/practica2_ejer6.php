<?php

$matriz = array();

for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        $matriz[$i][$j] = rand(1,100);
    }
}

$fila=0;
$columna=0;

for($i=0; $i<4; $i++){
    for($j=0; $j<5; $j++){
        if ($matriz[$i][$j]>$matriz[$fila][$columna]){
            $fila=$i;
            $columna=$j;
        }
    
    }
}
echo "Fila: $fila Columna: $columna";

?>