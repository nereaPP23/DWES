<?php

session_start();

$hn = 'localhost';
$db = 'oposicion';
$un = 'root';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");



$dni = $_SESSION['dniA'];
$nombre = $_SESSION['nombreA'];
$error='';
$guardado='';


$errorCod='';
$errorPruebaA='';
$errorPruebaB='';
$errorTipo='';
$errorInscripcion='';

$codCurso='';
$pruebaA='';
$pruebaB='';
$tipo='';
$inscripcion='';



 if (isset($_POST['submit'])) {
     if (empty($_POST['codCurso'])){
            $errorCod = 'El campo no puede estar vacio';
        }else {
            $codCurso = $_POST['codCurso'];
        }
    if (empty($_POST['pruebaA'])){
            $errorPruebaA = 'El campo no puede estar vacio';
        }else {
            $pruebaA = $_POST['pruebaA'];
        }
    if (empty($_POST['pruebaB'])){
            $errorPruebaB = 'El campo no puede estar vacio';
        }else {
            $pruebaB = $_POST['pruebaB'];
        }
    if (empty($_POST['tipo'])){
            $errorTipo = 'El campo no puede estar vacio';
        }else {
            $tipo = $_POST['tipo'];
        }
    if (empty($_POST['inscripcion'])){
            $errorInscripcion = 'El campo no puede estar vacio';
        }else {
            $inscripcion = $_POST['inscripcion'];
        }


    if ($errorCod == '' && $errorPruebaA == '' && $errorPruebaB == '' && $errorTipo == '' && $errorInscripcion == ''){
        $query = "SELECT codigocurso FROM curso WHERE codigocurso='$codCurso'";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");
        $rows = $result->num_rows;
        if ($rows == 1) {
            $query2 = "INSERT INTO matricula (dnialumno, codcurso, pruebaA, pruebaB, tipo, inscripcion) 
            VALUES ($dni, $codCurso, $pruebaA, $pruebaB, '$tipo', $inscripcion)";
            if (!$connection->query($query2)) die("Fatal Error");
            $guardado= 'Los datos se han guardado correctamente';
        }else {
            $error = "El codigo del curso no existe";
        }
        $result->close();
    }
 }


$connection->close();

echo <<<_END
<html>
    <body>
        <span style="background-color:orange">ALUMNO $dni</span><span style="background-color:lightblue">NOMBRE $nombre</span>
            <form action="ejercicio3.php" method="post">
                <br><label for="dni">DNI:</label><br>
                <input type="text" name="dni" value = "$dni"><br><br>
                <label for="codCurso">COD CURSO:</label><br>
                <input type="text" name="codCurso"><span style="color:red">*$errorCod</span><br><br>
                <label for="pruebaA">PRUEBA A:</label><br>
                <input type="text" name="pruebaA"><span style="color:red">*$errorPruebaA</span><br><br>
                <label for="pruebaB">PRUEBA B:</label><br>
                <input type="text" name="pruebaB"><span style="color:red">*$errorPruebaB</span><br><br>
                <label for="tipo">TIPO:</label><br>
                <input type="text" name="tipo"><span style="color:red">*$errorTipo</span><br><br>
                <label for="inscripcion">INSCRIPCION:</label><br>
                <input type="date" name="inscripcion"><span style="color:red">*$errorInscripcion</span><br><br>
                <input type="submit" name="submit" value="Guardar">
            </form>
            <p style="color:red">$error</p>
            <p style="color:green">$guardado</p>
    </body>
</html>
_END;

?>