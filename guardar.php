<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'universidad';
$user = 'sistemas';
$password = 'sistemas1sis';

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);
// Recepción de datos del formulario
$campo1 = $_POST['id'];
$campo2 = $_POST['nombre'];
$campo3 = $_POST['apellido'];
$campo4 = $_POST['telefono'];

// Sentencia SQL para insertar datos

$sql = "INSERT INTO estudiantes (id, nombre, apellido, telefono) VALUES ('$campo1', '$campo2', '$campo3', '$campo4')";
$conn->query($sql);
echo "Datos guardados correctamente.";
$conn->close();
?>
