<?php

$nombres = array('Pedro', 'Ismael', 'Sonia', 'Clara', 'Susana', 'Alfonso', 'Teresa');


echo "El array contiene ".count($nombres). " elementos<br><br>";

echo "<ul>";
foreach ($nombres as $valor) {
    echo "<li>$valor<br></li>";
}
echo "</ul>";
?>