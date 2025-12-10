<?php

session_start();

$hn = 'localhost';
$db = 'oposicion';
$un = 'root';
$pw = '';


$connection = new mysqli($hn, $un, $pw, $db);
 if ($connection->connect_error) die("Fatal Error");



$dni=$_SESSION['dniA'];
$nombre=$_SESSION['nombreA'];

$error='';
$guardado='';

  $errorCod='';
  $errorA='';
  $errorB='';
  $errorTipo='';
  $errorIns='';

  $codCurso = '';
  $pruebaA = '';
  $pruebaB = '';
  $tipo = '';
  $inscripcion = '';
  


  if (isset($_POST['submit'])){
    if (empty($_POST['codCurso'])){
            $errorCod = 'El campo cod curso es obligatorio';
        }else {
            $codCurso = $_POST['codCurso'];
        }
    if (empty($_POST['pruebaA'])){
            $errorA = 'El campo prueba A es obligatorio';
        }else {
            $pruebaA = $_POST['pruebaA'];
        }
    if (empty($_POST['pruebaB'])){
            $errorB = 'El campo prueba B es obligatorio';
        }else {
            $pruebaB = $_POST['pruebaB'];
        }
    if (empty($_POST['tipo'])){
            $errorTipo = 'El campo tipo es obligatorio';
        }else {
            $tipo = $_POST['tipo'];
        }
    if (empty($_POST['inscripcion'])){
            $errorIns = 'El campo inscripcion es obligatorio';
        }else {
            $inscripcion = $_POST['inscripcion'];
        }

    if($errorCod == '' && $errorA == '' && $errorB == '' && $errorTipo == '' && $errorIns == ''){
        $query = "SELECT codigocurso FROM curso WHERE codigocurso='$codCurso'";
        $result = $connection->query($query);
        if (!$result) die("Fatal Error");

        $rows = $result->num_rows;
        if ($rows == 1) {
            $query2 = "INSERT INTO matricula (dnialumno, codcurso, pruebaA, pruebaB, tipo, inscripcion) 
            VALUES ('$dni', '$codCurso', $pruebaA, $pruebaB, '$tipo', '$inscripcion')";
            if ($connection->query($query2)) {
                $guardado = "La matrícula del alumno $dni en el curso $codCurso se ha realizado correctamente.";
            } else {
                $error = "No se ha podido guardar la matrícula.";
            }
        }else {
            $error = "El codigo del curso no existe";
        }
        $result->close();
    }
  }


echo "<span style='background-color:orange'>ALUMNO $dni</span><span style='background-color:lightblue'>NOMBRE $nombre</span>";


 echo <<<_END
<html>
    <body>
        <form action="ejercicio3.php" method="post">
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="$dni"><br><br>

            <label for="codCurso">Cod curso</label>
            <input type="text" name="codCurso"><span style="color:red">*$errorCod</span><br><br>

            <label for="pruebaA">Prueba A</label>
            <input type="text" name="pruebaA" ><span style="color:red">*$errorA</span><br><br>

            <label for="pruebaB">Prueba B</label>
            <input type="text" name="pruebaB"><span style="color:red">$errorB</span><br><br>

            <label for ="tipo">Tipo</label>
            <input type="text" name="tipo"><span style="color:red">$errorTipo</span><br><br>

            <label for ="inscripcion">Inscripcion</label>
            <input type="text" name="inscripcion"><span style="color:red">$errorIns</span><br><br>


            <input type="submit" name="submit" value="Guardar">
        </form>
        <p>$error</p>
        <p>$guardado</p>
    </body>
</html>

_END;

?>