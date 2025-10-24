<?php
session_start();

echo "Buenos dias ".$_SESSION['nombre'] . " los jugadores que has elegido son ".$_POST['jugador1'].", ".$_POST['jugador2']." y ".$_POST['jugador3'];


?>