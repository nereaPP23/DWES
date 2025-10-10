<?php

$numeros=array(3,2,8,123,5,1);

sort($numeros);

echo "<table border='1'>";
echo "<tr><th>Numeros</th></tr>";

foreach ($numeros as $value) {
    echo "<tr><td>$value</td></tr>";
}
echo "</table>";
?>