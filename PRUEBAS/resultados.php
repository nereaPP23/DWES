<?php
session_start();
$perfil = $_SESSION['perfil'];

// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "masqueperros");

// Consulta de perros compatibles
$sql = "SELECT * FROM perro WHERE perfil_compatibilidad = '$perfil'";
$result = $conn->query($sql);

echo "<h2>Perros compatibles contigo:</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<p><strong>{$row['nombre']}</strong> - {$row['descripcion']}</p>";
}
