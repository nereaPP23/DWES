<?php

$arrayNum = array(5, 3, 1, 4, 6, 2, 0, 7);
$arrayString= array(
    'Hola',
    'Adios',
    'Pepe',
    'Juan',
    'Perro',
    'Gato'
);

sort($arrayNum);
sort($arrayString);

foreach ($arrayNum as $valor) {
    echo "$valor <br>";
}
echo "<br>";
foreach ($arrayString as $valor) {
    echo "$valor <br>";
}

?>