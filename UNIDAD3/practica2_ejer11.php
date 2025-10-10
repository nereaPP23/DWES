<?php

$meses = array(
    'Enero'=>9,
    'Febrero'=>12,
    'Marzo'=>0,
    'Abril'=>17
);

foreach ($meses as $mes=>$pelis) {
    if ($pelis!=0) {
        echo "Se han visto $pelis peliculas en $mes<br>";
    }
}
?>