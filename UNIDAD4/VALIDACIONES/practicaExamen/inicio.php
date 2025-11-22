<?php

session_start();
$imagenes = ["imagenes/OIP0.jfif","imagenes/OIP1.jfif","imagenes/OIP2.jfif","imagenes/OIP3.jfif","imagenes/OIP4.jfif"];


// Inicializar los contactos si no están definidos o si no son un array
if (!isset($_SESSION['contactos']) || !is_array($_SESSION['contactos'])) {
    $_SESSION['contactos'] = [];
    $_SESSION['contactos'] [] = $imagenes[array_rand($imagenes)];
}



if(isset($_POST['incrementar'])){
    if(count($_SESSION['contactos']) < 5){
        $_SESSION['contactos'][] = $imagenes[array_rand($imagenes)];
        if(count($_SESSION['contactos']) == 5){
            header("Location: agenda.php");
            exit();
        }
    }
}


if(isset($_POST['submit'])){
    header("Location: agenda.php");
    exit();
}

echo <<<_END
<html>
    <body>
        <h1>AGENDA</h1>
_END;

echo "<h2>Hola $_SESSION[usuario], cuantos contactos deseas grabar</h2>";

echo <<<_END
        <h2>Puedes grabar entre 1 y 5. Por cada pulsacion en INCREMENTAR grabaras un usuario mas.</h2>
        <h2>Cuando el numero sea el deseado pulsa GRABAR</h2>
_END;

if (is_array($_SESSION['contactos'])) {
    foreach ($_SESSION['contactos'] as $emoji){
        echo "<img src='$emoji' alt='emoji' style='width:250px;height:170px;'>";
    }
}else{
    echo "<p>No hay contactos disponibles.</p>";
}

echo <<<_END
    <form action="inicio.php" method="post">
        <input type="submit" name="incrementar" value="INCREMENTAR">
        <input type="submit" name="submit" value="GRABAR">
    </form>
    </body>
</html>
_END;

?>