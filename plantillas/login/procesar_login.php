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

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row["contrasena"])) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: /capston/plantillas/inicio/index.php");
        } else {
            header("Location: /capston/plantillas/login/login.php?error=credenciales_invalidas");
        }
    } else {
        header("Location: /capston/plantillas/login/login.php?error=credenciales_invalidas");
    }

    $conn->close();
}

if (password_verify($contrasena, $row["contrasena"])) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["usuario_logueado"] = true; // Establece la variable de sesión
    header("Location: /capston/plantillas/inicio/index.php");
} else {
    header("Location: /capston/plantillas/login/login.php?error=credenciales_invalidas");
}
?>
