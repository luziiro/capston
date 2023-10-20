
<?php
require 'vendor/autoload.php';

use OpenAI\Api\OpenAI;
use OpenAI\Util\OpenAIEnvironment;
use OpenAI\Util\ApiRequest;

// Define tu clave de API de OpenAI (puedes almacenarla en una variable de entorno para mayor seguridad)
$apiKey = "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";

// Define el contenido del prompt para la generación de recomendaciones
$prompt = "Dadas tus selecciones, aquí tienes algunas recomendaciones para mejorar tu salud:\n";
$actividad = $_GET['actividad'];
$tabaco = $_GET['tabaco'];
$alcohol = $_GET['alcohol'];

// Agrega recomendaciones basadas en las selecciones del usuario
$prompt .= "- Nivel de actividad física: $actividad\n";
$prompt .= "- Consumo de tabaco: $tabaco\n";
$prompt .= "- Consumo de alcohol: $alcohol\n";

// Configura el entorno de OpenAI
OpenAIEnvironment::configure($apiKey);

// Define el modelo de lenguaje a utilizar (puedes ajustarlo según tus necesidades)
$model = "text-davinci-002";

// Parámetros para la generación del texto
$params = [
    'model' => $model,
    'temperature' => 0.7,
    'max_tokens' => 150
];

// Realiza una solicitud a la API de OpenAI para generar la recomendación
$response = ApiRequest::create('completions', [
    'prompt' => $prompt,
    'max_tokens' => 50,
    'temperature' => 0.7
])->addSubdomain('api');

$api = new OpenAI();

try {
    $api->sendRequest($response);
    $recommendation = $response->getDecodedBody()['choices'][0]['text'];

    // Devuelve la recomendación en formato JSON
    $responseData = ['recommendation' => $recommendation];
    header('Content-Type: application/json');
    echo json_encode($responseData);
} catch (Exception $e) {
    // Maneja errores si ocurren
    $error = $e->getMessage();
    header('Content-Type: application/json', true, 500);
    echo json_encode(['error' => $error]);
}
