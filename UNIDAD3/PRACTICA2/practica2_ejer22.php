<?php

$array = array(
    5 =>1,
    12=>2,
    13=>56,
    'x'=>42
);

print_r($array);

echo "<br>El array tiene ".count($array)." elementos<br>";
unset($array[5]);
print_r($array);

foreach ($array as $indice => $valor) {
    unset($array[$indice]);
}

echo "<br>El array tiene ".count($array)." elementos<br>";
print_r($array);
?>