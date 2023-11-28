<?php
// procesar_datos.php

// Datos de conexión a la base de datos
$host = "localhost";
$dbUsername = "root"; // Cambia esto por tu nombre de usuario de MySQL
$dbPassword = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "evaluador_salud"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$condiciones = $_POST['condiciones'];
$medicaciones = $_POST['medicaciones'];
$estilo_vida = $_POST['estilo_vida'];
$objetivos = $_POST['objetivos'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios_salud (nombre, edad, peso, altura, condiciones, medicaciones, estilo_vida, objetivos) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar declaración
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiddsss", $nombre, $edad, $peso, $altura, $condiciones, $medicaciones, $estilo_vida, $objetivos);

// Ejecutar declaración
if ($stmt->execute()) {
    echo "Datos guardados exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar declaración y conexión
$stmt->close();
$conn->close();
?>
