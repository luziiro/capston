<?php
include 'funciones_validacion.php';

$servername = "localhost"; // Cambia esto si tu servidor MySQL tiene un nombre diferente
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "evaluador_salud"; // Cambia esto por el nombre de tu base de datos


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $sexo = $_POST["sexo"];

    if (validar_campos_registro($nombre, $apellido, $email, $contrasena, $fecha_nacimiento, $sexo)) {
        // Hash de la contraseña (puedes utilizar otros métodos más seguros)
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

        // Crear la consulta SQL para insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, apellido, email, contrasena, fecha_nacimiento, sexo)
                VALUES ('$nombre', '$apellido', '$email', '$hashed_password', '$fecha_nacimiento', '$sexo')";

        if ($conn->query($sql) === TRUE) {
            // Registro exitoso
            header("Location: confirmacion_registro.php");
        } else {
            // Error en la consulta
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header("Location: registro.php?error=campos_incompletos");
    }
}

// Cerrar conexión
$conn->close();
?>
