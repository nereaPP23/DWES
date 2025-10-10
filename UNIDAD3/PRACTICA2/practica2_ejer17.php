<?php

$animales = array('lagartija','araña','perro','gaton','raton');
$numeros = array(12,34,45,52,12);
$array = array('sauce','pino','naranjo','chopo','perro',34);


$mezcla = array_merge($animales, $numeros, $array);
foreach ($mezcla as $valor) {
    echo "$valor<br>";
}   
print_r($mezcla);
?>