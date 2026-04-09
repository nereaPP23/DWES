<?php

session_start();
require_once "pintar_circulos.php";

$nombre = $_SESSION['usuario']; 

$colores = ["red", "blue", "yellow", "green"];
$combinacion = [];

for ($i=0; $i<4; $i++){
    $combinacion[] = $colores[array_rand($colores)];
}

$_SESSION['combinacion-correcta']= $combinacion;

echo <<<END

<h1>SIMON</h1>
<h1>Hola $nombre, memoriza la combinacion</h1>
END;
pintar_circulos($combinacion[0],$combinacion[1],$combinacion[2],$combinacion[3]);

echo <<<END
<form action="jugar.php" method="post">
    <input type="submit" name="submit" value="Vamos a jugar">
</form>
END;
?>