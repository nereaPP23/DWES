<?php

session_start();

$levantar=0;

if (isset($_SESSION['tablero'])){
    $cartas= ["nombres cartas"]; //nombres de las imagenes de las cartas copas
    $_SESSION['tablero']= $cartas;
    $_SESSION['intentos']=0;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['levantar'])){
        $levantar=$_POST['levantar'];
        $_SESSION['intentos']++;
    }
}

echo <<<END
<h1>Bienvenido {$_SESSION['login']}</h1>
<h3>Cartas levantadas<input type="text" name="levantar" value="{$_SESSION['intentos']}"></h3>

<form action="mostrarcartas.php" method="post">
BOTONES CON FOR 
</form>

<form action="resultado.php" method="post">
<input type="number" name="resultado1"required>
<input type="number" name="resultado2"required>
<input type="submit" name="comprobar">
</form>
END;

for ($i=0; $i<6; $i++){
    if ($i==$levantar){
        $imagen= "./materiales/". $_SESSION['tablero'][$i];
        echo "<img src='$imagen' alt='carta'>";
    }
    else{
        echo "<img src='./materiales/boca_abajo.jpg' alt='carta negra'>";
    }
}
?>