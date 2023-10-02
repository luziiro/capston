<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Realiza la consulta a la base de datos
    $conn = new mysqli("localhost", "root", "", "evaluador_salud");
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    
    // Realiza la consulta a la base de datos
    $conn = new mysqli("localhost", "root", "", "evaluador_salud");
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row["contrasena"])) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["nombre_usuario"] = $row["nombre"]; // Configura el nombre del usuario
            $_SESSION["usuario_logueado"] = true;
            header("Location: /capston/plantillas/inicio/index.php");
            exit; // Importante: salir del script después de la redirección
        }
    }
    
    // Si el flujo llega aquí, es porque el inicio de sesión falló
    header("Location: /capston/plantillas/login/login.php?error=credenciales_invalidas");
    exit; // Importante: salir del script después de la redirección
}
    
    $conn->close();
}
?>