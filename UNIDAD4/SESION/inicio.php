<?php

session_start();

$_SESSION['combinacioncorrecta'] = array("rojo", "verde", "azul", "amarillo");

echo <<<_END
<html>
    <body>
        <h1>SIMÓN</h1>
            <h2>Memoriza la combinación</h2>
            
?>