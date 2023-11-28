<?php
// procesar_datos.php

session_start();

// Asegúrate de que el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de login si no está logueado
    header('Location: login.php');
    exit;
}

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
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$condiciones = $_POST['condiciones'];
$medicaciones = $_POST['medicaciones'];
$estilo_vida = $_POST['estilo_vida'];
$objetivos = $_POST['objetivos'];
$user_id = $_SESSION['user_id']; // ID del usuario logueado

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios_salud (user_id, peso, altura, condiciones, medicaciones, estilo_vida, objetivos) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Preparar declaración
$stmt = $conn->prepare($sql);

// Verificar si la declaración se preparó correctamente
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Asegúrate de que los tipos de datos aquí coincidan con los de tus columnas en la base de datos
$stmt->bind_param("issssss", $user_id, $peso, $altura, $condiciones, $medicaciones, $estilo_vida, $objetivos);

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
