<?php

$lenguajes_cliente = array(
    'CSS3'=> 'CSS',
    'JS1'=> 'JavaScritp',
    'HTML5'=> 'HTML'
);
$lenguajes_servidor = array(
    'PHP'=> 'CSS',
    'Node'=> 'Node.js',
    'ASP1'=> 'ASP'
);

/*array_merge(array1, array2)
Lo que hace es unir dos arrays, y devolver un nuevo array con los valores de ambos
Array2 se añade al final del array1
*/

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Lenguaje</th></tr>";
foreach ($lenguajes as $indice => $lenguaje) { 
    echo "<tr><td>$indice</td><td>$lenguaje</td></tr>";
}
echo "</table>";


?>