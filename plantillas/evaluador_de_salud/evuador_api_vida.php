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
$activity_level = $_POST['activity_level'];
$smoking_habit = $_POST['smoking_habit'];
$alcohol_habit = $_POST['alcohol_habit'];
$eating_habits = $_POST['eating_habits'];
$user_id = $_SESSION['user_id']; // ID del usuario logueado

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO tabla_vida (user_id, activity_level, smoking_habit, alcohol_habit, eating_habits) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $user_id, $activity_level, $smoking_habit, $alcohol_habit, $eating_habits);

if ($stmt->execute()) {
    echo "Datos guardados con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
//$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los nuevos datos del formulario
    $activity_level = $_POST['activity_level'];
    $smoking_habit = $_POST['smoking_habit'];
    $alcohol_habit = $_POST['alcohol_habit'];
    $eating_habits = $_POST['eating_habits'];

    // Tu clave API de OpenAI (asegúrate de usar una clave válida y mantenerla segura)
    $api_key = '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'; // Reemplaza con tu clave API real

    // Formula la pregunta para la API
    $pregunta = "si mi nivel de actividad fisica es: {$activity_level} y mi consumo de tabaco es de: {$smoking_habit} por semana, mi consumo de alcohol es de: {$alcohol_habit} por semana y mis habitos alimenticios son: {$eating_habits}, que deberia hacer para mantener un estilo de vida saludable y mejorar mi salud, se muy especifico";

    // Datos que enviarás a la API de OpenAI
    $data = [
        'model' => 'text-davinci-003', // Especifica el modelo aquí
        'prompt' => $pregunta,
        'temperature' => 0.7,
        'max_tokens' => 1000
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
        $sql = "UPDATE tabla_vida SET respuesta_api = ? WHERE user_id = ? AND activity_level = ? AND smoking_habit = ? AND alcohol_habit = ? AND eating_habits = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error preparando la consulta: " . $conn->error);
        }

        // Asegúrate de que los tipos de datos en bind_param sean correctos
        $stmt->bind_param("sissss", $respuestaAPI, $user_id, $activity_level, $smoking_habit, $alcohol_habit, $eating_habits);

        if (!$stmt->execute()) {
            echo "Error al guardar la respuesta de la API: " . $stmt->error;
        } else {
            echo "Respuesta de la API guardada con éxito";
        }

        $stmt->close();
    }

    $conn->close();

    // Redirecciona de vuelta al formulario
    header('Location: evaluador_vida.php');
    exit();
}
?>
