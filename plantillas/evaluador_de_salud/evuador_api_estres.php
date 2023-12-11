<?php
session_start(); // Inicia una nueva sesión o reanuda la existente

// Asegúrate de que el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    // Redirigir al usuario a la página de login si no está logueado
    header('Location: login.php');
    exit;
}

// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "evaluador_salud");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recoger los datos del formulario
$stress_description = $_POST['stress_description'];
$stress_causes = $_POST['stress_causes'];
$stress_impact = $_POST['stress_impact'];
$stress_coping = $_POST['stress_coping'];
$user_id = $_SESSION['user_id']; // ID del usuario logueado

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO tabla_estres (user_id, stress_description, stress_causes, stress_impact, stress_coping) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $user_id, $stress_description, $stress_causes, $stress_impact, $stress_coping);

if ($stmt->execute()) {
    echo "Datos guardados con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
//$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los nuevos datos del formulario
    $stress_description = $_POST['stress_description'] ?? 'No especificado';
    $stress_causes = $_POST['stress_causes'] ?? 'No especificado';
    $stress_impact = $_POST['stress_impact'] ?? 'No especificado';
    $stress_coping = $_POST['stress_coping'] ?? 'No especificado';

    // Tu clave API de OpenAI
    $api_key = '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'; // Reemplaza con tu clave API real

    // Formula la pregunta para la API
    $pregunta = "Descripción del estrés: '{$stress_description}'. Causas del estrés: '{$stress_causes}'. Impacto del estrés: '{$stress_impact}'. Estrategias de afrontamiento: '{$stress_coping}'. ¿Cuáles son las mejores estrategias para manejar esta situación específica de estrés?";

    // Datos que enviarás a la API de OpenAI
    $data = [
        'model' => 'text-davinci-003', // Especifica el modelo aquí
        'prompt' => $pregunta,
        'temperature' => 0.7,
        'max_tokens' => 1000
    ];

    // Inicializa cURL
    $ch = curl_init('https://api.openai.com/v1/completions');

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
        $sql = "UPDATE tabla_estres SET respuesta_api = ? WHERE user_id = ? AND stress_description = ? AND stress_causes = ? AND stress_impact = ? AND stress_coping = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparando la consulta: " . $conn->error);
        }

        // Asegúrate de que los tipos de datos en bind_param sean correctos
        $stmt->bind_param("sissss", $respuestaAPI, $user_id, $stress_description, $stress_causes, $stress_impact, $stress_coping);

        if (!$stmt->execute()) {
            echo "Error al guardar la respuesta de la API: " . $stmt->error;
        } else {
            echo "Respuesta de la API guardada con éxito";
        }

        $stmt->close();
    }

    $conn->close();

    // Redirecciona de vuelta al formulario
    header('Location: evaluador_gest_estres.php');
    exit();
}
?>
