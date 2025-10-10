<?php

$animales = array('lagartija','araña','perro','gaton','raton');
$numeros = array(12,34,45,52,12);
$array = array('sauce','pino','naranjo','chopo','perro',34);

$mezcla = array();

foreach ($animales as $valor) {
    array_push($mezcla,$valor);
}

foreach ($numeros as $valor) {
    array_push($mezcla,$valor);
}

foreach ($array as $valor) {
    array_push($mezcla,$valor);
}

foreach ($mezcla as $valor) {
    echo "$valor<br>";
}
print_r($mezcla);
?>