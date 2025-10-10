<?php

$estadios_futbol = array(
    'Barcelona'=> 'Camp Nou',
    'Real Madrid'=> 'Santiago Bernabeu',
    'Valencia'=> 'Mestalla',
    'Real Sociedad'=> 'Anoeta',
);

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Estadio</th></tr>";

foreach ($estadios_futbol as $nombre => $estadio) {
    echo "<tr><td>$nombre</td><td>$estadio</td></tr>";
}
echo "</table>";

/*unset(array)
Elimina un elemento de un array
*/

unset($estadios_futbol['Real Madrid']);

echo "<ol>";
foreach ($estadios_futbol as $nombre => $estadio) {
    echo "<li>$nombre: $estadio</li>";
}
echo "</ol>";

?>