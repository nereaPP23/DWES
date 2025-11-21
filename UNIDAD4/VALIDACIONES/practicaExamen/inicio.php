<?php

session_start();

$array = [1,2,3,4,5];


if(isset($_POST['incrementar'])){
    $incrementar = $_POST['incrementar'];
    for($i=0; $i<5; $i++){
        $array[array_rand($array)];
        switch($array[$i]){
            case 1:
                $imagen = 'OIP0.jfif';
                break;
            case 2:
                $imagen = 'OIP01.jfif';
                break;
            case 3:
                $imagen = 'OIP02.jfif';
                break;
            case 4:
                $imagen = 'OIP03.jfif';
                break;
            case 5:
                $imagen = 'OIP04.jfif';
                break;
        }
    }

}



echo <<<_END
<html>
    <body>
        <h1>AGENDA</h1>
_END;

echo "<h2>Hola $_SESSION[usuario], cuantos contactos deseas grabar</h2>";

echo <<<_END
        <h2>Puedes grabar entre 1 y 5. Por cada pulsacion en INCREMENTAR grabaras un usuario mas.</h2>
        <h2>Cuando el numero sea el deseado GRABAR</h2>
        <img src="imagenes/$imagen" alt="imagenes" width="250" height="200"><br><br>
        <input type="submit" name="incrementar" value="INCREMENTAR">
        <input type="submit" name="submit" value="GRABAR">
_END;

?>