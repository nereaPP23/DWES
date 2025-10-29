<?php
session_start();

// Guardar respuestas en sesión
$_SESSION['test'] = [
  'tiempo_fuera' => $_POST['tiempo_fuera'],
  'tamano' => $_POST['tamano'],
  'experiencia' => $_POST['experiencia']
];

// Lógica de compatibilidad (simplificada)
$perfil = '';

if ($_POST['tiempo_fuera'] == 'mucho') {
  $perfil .= 'independiente_';
} else {
  $perfil .= 'sociable_';
}

$perfil .= $_POST['tamano'] . '_';

if ($_POST['experiencia'] == 'no') {
  $perfil .= 'facil';
} else {
  $perfil .= 'activo';
}

$_SESSION['perfil'] = $perfil;

// Redirigir a resultados
header("Location: resultados.php");
exit();
