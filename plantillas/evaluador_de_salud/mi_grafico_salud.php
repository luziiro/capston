<?php include '../inicio/header.php';?>

<style type="text/css">
html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(#B873FF, transparent);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background-image: linear-gradient(45deg, #BC3CFF, #317FFF);
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}
.perfil-usuario-body-2 {
    width: 100%;
    position: relative;
    max-width: 750px;
}
.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
    justify-content: center;
}
.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}
</style>

<?php

// Asegúrate de que el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de login si no está logueado
    header('Location: login.php');
    exit;
}

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "evaluador_salud";

// Crear conexión
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_SESSION['user_id']; // ID del usuario logueado

// Inicializar variables con valores vacíos
$nombreCompleto = $email = $fechaNacimiento = $sexo = "";
$peso = $altura = $condiciones = $medicaciones = $historial_familiar = $habitos_alimenticios = $consumo_alcohol = $consumo_tabaco = $calidad_sueno = $presion_arterial = $frecuencia_cardiaca = $estilo_vida = $objetivos = $respuestaAPI ="";

// Primera consulta para obtener datos de la tabla usuarios
$sqlUsuarios = "SELECT nombre, apellido, email, fecha_nacimiento, sexo FROM usuarios WHERE id = $userId";
$resultUsuarios = $conn->query($sqlUsuarios);

if ($resultUsuarios->num_rows > 0) {
    $rowUsuarios = $resultUsuarios->fetch_assoc();
    $nombreCompleto = $rowUsuarios["nombre"] . " " . $rowUsuarios["apellido"];
    $email = $rowUsuarios["email"];
    $fechaNacimiento = $rowUsuarios["fecha_nacimiento"];
    $sexo = $rowUsuarios["sexo"];
}

// Segunda consulta para obtener el último registro de la tabla usuarios_salud
$sqlSalud = "SELECT peso, altura, condiciones, medicaciones, historial_familiar, habitos_alimenticios, consumo_alcohol, consumo_tabaco, calidad_sueno, presion_arterial, frecuencia_cardiaca, estilo_vida, objetivos, respuesta_api FROM usuarios_salud WHERE user_id = $userId ORDER BY id DESC LIMIT 1";
$resultSalud = $conn->query($sqlSalud);

if ($resultSalud->num_rows > 0) {
    $rowSalud = $resultSalud->fetch_assoc();
    $peso = $rowSalud["peso"];
    $altura = $rowSalud["altura"];
    $condiciones = $rowSalud["condiciones"];
    $medicaciones = $rowSalud["medicaciones"];
    $estiloVida = $rowSalud["estilo_vida"];
    $objetivos = $rowSalud["objetivos"];
    $historial_familiar = $rowSalud['historial_familiar'];
    $habitos_alimenticios = $rowSalud['habitos_alimenticios'];
    $consumo_alcohol = $rowSalud['consumo_alcohol'];
    $consumo_tabaco = $rowSalud['consumo_tabaco'];
    $calidad_sueno = $rowSalud['calidad_sueno'];
    $presion_arterial = $rowSalud['presion_arterial'];
    $frecuencia_cardiaca = $rowSalud['frecuencia_cardiaca'];
    $respuestaAPI = $rowSalud['respuesta_api'];
}

$conn->close();
?>

    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-footer">
                <div class="perfil-usuario-body-2">
                    <center><h1>Predicción futura</h1></center>
                    <p><?php echo $respuestaAPI; ?></p>
                </div>
            </div>
        </div>
    </section>

<?php include '../inicio/footer.php'; ?>