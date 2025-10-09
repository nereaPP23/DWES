<?php

$arrayNum = array(5, 3, 1, 4, 6, 2, 0, 7);
$array = array(1,2,3,4,5,6,7,8,9,10);
$arrayString= array(
    'Hola',
    'Adios',
    'Pepe',
    'Juan',
    'Perro',
    'Gato'
);
$temp = explode(' ', "This is a sentence with seven words");


sort($arrayNum);
sort($arrayString);
shuffle($array);

foreach ($arrayNum as $valor) {
    echo "$valor \n";
}
echo "<br>";
foreach ($arrayString as $valor) {
    echo "$valor \n";
}
echo "<br>";
foreach ($array as $valor) {
    echo "$valor \n";
}
echo '<br><br>';
print_r($temp);
echo '<br>';


?>