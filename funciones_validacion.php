<?php
function validar_campos_registro($nombre, $apellido, $email, $contrasena, $fecha_nacimiento, $sexo) {
    if (empty($nombre) || empty($apellido) || empty($email) || empty($contrasena) || empty($fecha_nacimiento) || empty($sexo)) {
        return false;
    }
    return true;
}
?>
