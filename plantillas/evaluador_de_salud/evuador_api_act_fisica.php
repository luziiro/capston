<?php
session_start(); // Inicia una nueva sesión o reanuda la existente

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos ingresados por el usuario
    $activity = $_POST['activity'];
    $duration = $_POST['duration'];
    $exercise_goal = $_POST['exercise-goal'];

    // Tu clave API de OpenAI (asegúrate de usar una clave válida y mantenerla segura)
    $api_key = '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'; // Reemplaza con tu clave API real

    // Formula la pregunta para la API
    $pregunta = "Para el tipo de actividad {$activity}, con una duración de {$duration} minutos y un objetivo de ejercicio {$exercise_goal}, ¿cuáles serían las recomendaciones para un plan de salud integral que incluya un régimen de ejercicios? Por favor, detalla tipos de ejercicios, duración y frecuencia de las actividades físicas.";

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

    // Verifica si hubo un error con la solicitud
    if(curl_errno($ch)) {
        $_SESSION['respuestaIA'] = 'Error en la solicitud cURL: ' . curl_error($ch);
    } else {
        // Decodifica la respuesta JSON
        $responseData = json_decode($response, true);

        // Verifica si la respuesta contiene la clave 'choices'
        if(isset($responseData['choices'])) {
            $_SESSION['respuestaIA'] = $responseData['choices'][0]['text'];
        } else {
            $_SESSION['respuestaIA'] = "No se pudo obtener una respuesta. Detalles: " . json_encode($responseData);
        }
    }

    // Cierra la sesión cURL
    curl_close($ch);

    // Redirecciona de vuelta al formulario
    header('Location: evaluador_act_fisica.php');
    exit();
}
?>
