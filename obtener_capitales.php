<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los países ingresados por el usuario
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $edad = $_POST['edad'];

    // Tu clave API de OpenAI (asegúrate de usar una clave válida y mantenerla segura)
    $api_key = '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';

    // Formula la pregunta para la API
    $pregunta = "Considerando una persona con una altura de {$altura} metros, un peso de {$peso} kg y una edad de {$edad} años, ¿cuál sería un plan de salud integral que incluya una dieta equilibrada y un régimen de ejercicios? Por favor, detalla tipos de alimentos recomendados, cantidades, frecuencia de comidas, tipos de ejercicios, duración y frecuencia de las actividades físicas.";

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
        echo 'Error en la solicitud cURL: ' . curl_error($ch);
    } else {
        // Decodifica la respuesta JSON
        $responseData = json_decode($response, true);

        // Verifica si la respuesta contiene la clave 'choices'
        if(isset($responseData['choices'])) {
            // Imprime la respuesta (las capitales de los países)
            echo "<h2>Las capitales de $altura y $edad y $peso son:</h2>";
            echo "<p>" . $responseData['choices'][0]['text'] . "</p>";
        } else {
            // Imprime la respuesta completa para depurar
            echo "Respuesta recibida de la API:\n";
            print_r($responseData);
        }
    }

    // Cierra la sesión cURL
    curl_close($ch);
}
?>
