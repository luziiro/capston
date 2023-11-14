<?php
// Tu clave API de OpenAI (asegúrate de usar una clave válida y mantenerla segura)
$api_key = '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';

// La pregunta que quieres hacer
$pregunta = '¿Cuál es la capital de Francia?';

// Datos que enviarás a la API de OpenAI
$data = [
    'model' => 'text-davinci-003', // Especifica el modelo aquí
    'prompt' => $pregunta,
    'temperature' => 0.7,
    'max_tokens' => 150
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
    echo 'Error en la solicitud cURL: ' . curl_error($ch);
} else {
    // Decodifica la respuesta JSON
    $responseData = json_decode($response, true);

    // Verifica si la respuesta contiene la clave 'choices'
    if(isset($responseData['choices'])) {
        // Imprime la respuesta (el texto generado por GPT-3)
        echo $responseData['choices'][0]['text'];
    } else {
        // Imprime la respuesta completa para depurar
        echo "Respuesta recibida de la API:\n";
        print_r($responseData);
    }
}

// Cierra la sesión cURL
curl_close($ch);
?>

