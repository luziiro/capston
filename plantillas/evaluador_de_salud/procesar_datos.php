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
$historial_familiar = $_POST['historial_familiar'];
$habitos_alimenticios = $_POST['habitos_alimenticios'];
$consumo_alcohol = $_POST['consumo_alcohol'];
$consumo_tabaco = $_POST['consumo_tabaco'];
$calidad_sueno = $_POST['calidad_sueno'];
$presion_arterial = $_POST['presion_arterial'];
$frecuencia_cardiaca = $_POST['frecuencia_cardiaca'];
$user_id = $_SESSION['user_id']; // ID del usuario logueado

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios_salud (user_id, peso, altura, condiciones, medicaciones, historial_familiar, habitos_alimenticios, consumo_alcohol, consumo_tabaco, calidad_sueno, presion_arterial, frecuencia_cardiaca, estilo_vida, objetivos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar declaración
$stmt = $conn->prepare($sql);

// Verificar si la declaración se preparó correctamente
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Asegúrate de que los tipos de datos aquí coincidan con los de tus columnas en la base de datos
$stmt->bind_param("isssssssssssss", $user_id, $peso, $altura, $condiciones, $medicaciones, $historial_familiar, $habitos_alimenticios, $consumo_alcohol, $consumo_tabaco, $calidad_sueno, $presion_arterial, $frecuencia_cardiaca, $estilo_vida, $objetivos);

// Ejecutar declaración
if ($stmt->execute()) {
    echo "Datos guardados exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar declaración y conexión
$stmt->close();
//$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos ingresados por el usuario
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $condiciones = $_POST['condiciones'];
    $medicaciones = $_POST['medicaciones'];
    $estilo_vida = $_POST['estilo_vida'];
    $objetivos = $_POST['objetivos'];
    $historial_familiar = $_POST['historial_familiar'];
    $habitos_alimenticios = $_POST['habitos_alimenticios'];
    $consumo_alcohol = $_POST['consumo_alcohol'];
    $consumo_tabaco = $_POST['consumo_tabaco'];
    $calidad_sueno = $_POST['calidad_sueno'];
    $presion_arterial = $_POST['presion_arterial'];
    $frecuencia_cardiaca = $_POST['frecuencia_cardiaca'];

    // Tu clave API de OpenAI (asegúrate de usar una clave válida y mantenerla segura)
    $api_key = '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'; // Reemplaza con tu clave API real

    // Formula la pregunta para la API
    $pregunta = "hazme una prediccion a futuro sobre la salud de esta persona basado en estos datos que te dare: su peso que es este {$peso}(ignorar si no esta el peso), su altura es esta {$altura}(ignorar si no esta la altura), tiene esta condicion medica {$condiciones}(ignorar si no hay condicion medica),toma esta medicacion {$medicaciones}(ignorar si no hay medicaciones),tiene este historial medico {$historial_familiar}(ignorar si no hay historial medico),tiene estos habitos alimenticios {$habitos_alimenticios}(ignorar si no hay habitos alimenticios),tiene este consumo de alcohol por semana {$consumo_alcohol},tiene este consumo de tabaco por semana {$consumo_tabaco},esta es su calidad de sueño {$calidad_sueno}(ignorar si no hay calidad de sueño),tiene esta presion arterial {$presion_arterial},tiene esta frecuencia cardiaca {$frecuencia_cardiaca}(ignorar si no hay frecuencia cardiaca),tiene este estilo de vida {$estilo_vida}(ignorar si no hay estilo de vida),este es su objetivo {$objetivos}(ignorar si no hay objetivos)";

    // Datos que enviarás a la API de OpenAI
    $data = [
        'model' => 'text-davinci-003', // Especifica el modelo aquí
        'prompt' => $pregunta,
        'temperature' => 0.7,
        'max_tokens' => 2000
    ];

    // Inicializa cURL
    $ch = curl_init('https://api.openai.com/v1/completions'); // URL actualizada

    // Configura las opciones de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ]);

    // Ejecuta la solicitud cURL
    $response = curl_exec($ch);

    // Inicializa la variable para almacenar la respuesta de la API
    $respuestaAPI = "";

    // Verifica si hubo un error con la solicitud
    if(curl_errno($ch)) {
        $_SESSION['respuestaIA'] = 'Error en la solicitud cURL: ' . curl_error($ch);
    } else {
        // Decodifica la respuesta JSON
        $responseData = json_decode($response, true);

        // Verifica si la respuesta contiene la clave 'choices'
        if(isset($responseData['choices'])) {
            $respuestaAPI = $responseData['choices'][0]['text'];
            $_SESSION['respuestaIA'] = $respuestaAPI;
        } else {
            $_SESSION['respuestaIA'] = "No se pudo obtener una respuesta. Detalles: " . json_encode($responseData);
        }
    }

    // Cierra la sesión cURL
    curl_close($ch);

    // Verifica si la respuesta de la API se recibió correctamente
    echo "Respuesta API: " . $respuestaAPI;

    // Asegúrate de que la respuesta de la API no esté vacía antes de intentar guardarla en la base de datos
    if (!empty($respuestaAPI)) {
        // Guardar la respuesta de la API en la base de datos
        $sql = "UPDATE usuarios_salud
        SET respuesta_api = ?, 
            peso = ?, 
            altura = ?, 
            condiciones = ?, 
            medicaciones = ?, 
            estilo_vida = ?, 
            objetivos = ?, 
            historial_familiar = ?, 
            habitos_alimenticios = ?, 
            consumo_alcohol = ?, 
            consumo_tabaco = ?, 
            calidad_sueno = ?, 
            presion_arterial = ?, 
            frecuencia_cardiaca = ?
        WHERE user_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparando la consulta: " . $conn->error);
        }

        // Asegúrate de que los tipos de datos en bind_param sean correctos
        $stmt->bind_param("sissssssssssssi", $respuestaAPI, $peso, $altura, $condiciones, $medicaciones, $estilo_vida, $objetivos, $historial_familiar, $habitos_alimenticios, $consumo_alcohol, $consumo_tabaco, $calidad_sueno, $presion_arterial, $frecuencia_cardiaca, $user_id);

        if (!$stmt->execute()) {
            echo "Error al guardar la respuesta de la API: " . $stmt->error;
        } else {
            echo "Respuesta de la API guardada con éxito";
        }

        $stmt->close();
    }

    $conn->close();


    // Redirecciona de vuelta al formulario
    header('Location: perfil.php');
    exit();
}
?>
