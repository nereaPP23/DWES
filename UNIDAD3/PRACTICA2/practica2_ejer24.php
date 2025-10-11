<?php

$deportes = array('futbol','baloncesto', 'natación', 'tenis');

foreach ($deportes as $deporte) {
    echo "$deporte<br>";
}   

echo "<br>El array contiene ".count($deportes)." elementos<br>";


?>