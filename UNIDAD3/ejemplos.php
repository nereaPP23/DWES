<?php

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

/*
Salida por pantalla:
    [1] => 2
    [hola] => 2
    [mundo] => 1
    cuenta las veces que aparece cada valor en el array
*/
?>