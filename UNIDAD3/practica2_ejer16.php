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

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border='1'>";
echo "<tr><th>Índice</th><th>Lenguaje</th></tr>";
foreach ($lenguajes as $indice => $lenguaje) { 
    echo "<tr><td>$indice</td><td>$lenguaje</td></tr>";
}
echo "</table>";


?>