<?php
session_start(); // Inicia una nueva sesión o reanuda la existente

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

    // Verifica si hubo un error con la solicitud
    if (curl_errno($ch)) {
        $_SESSION['respuestaIA'] = 'Error en la solicitud cURL: ' . curl_error($ch);
    } else {
        // Decodifica la respuesta JSON
        $responseData = json_decode($response, true);

        // Verifica si la respuesta contiene la clave 'choices'
        if (isset($responseData['choices'])) {
            $_SESSION['respuestaIA'] = $responseData['choices'][0]['text'];
        } else {
            $_SESSION['respuestaIA'] = "No se pudo obtener una respuesta. Detalles: " . json_encode($responseData);
        }
    }

    // Cierra la sesión cURL
    curl_close($ch);

    // Redirecciona de vuelta al formulario
    header('Location: evaluador_gest_estres.php');
    exit();
}
?>
