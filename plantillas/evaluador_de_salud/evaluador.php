<?php
// Iniciar el manejo de errores y mostrar errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de cabecera
include '../inicio/header.php';

// Función para enviar preguntas a la API de OpenAI
function obtenerRespuestaIA($altura, $peso, $edad) {
    // Crear una pregunta detallada para la IA (ajusta esta pregunta según tus necesidades)
    $pregunta = "Basado en una altura de {$altura} metros, un peso de {$peso} kg y una edad de {$edad} años, ¿qué dieta y plan de vida recomiendas para mejorar la salud de esta persona?";

    $data = [
        'prompt' => $pregunta,
        'max_tokens' => 150  // Ajustar el número de tokens para mantener la respuesta dentro del límite de 750 caracteres
    ];

    $api_key = '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'; // Reemplaza esto con tu clave API real

    $ch = curl_init('https://api.openai.com/v1/engines/davinci/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        return 'Error en cURL: ' . curl_error($ch);
    }
    if (!$response) {
        return 'Error en la solicitud a la API de OpenAI.';
    }
    curl_close($ch);
    $response_data = json_decode($response, true);

    if (!isset($response_data['choices'])) {
        return 'Error: La respuesta de la API no contiene la clave "choices".';
    }

    return $response_data['choices'][0]['text'] ?? 'Error: Respuesta inesperada de la API.';
}

$respuestaIA = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegurar que todos los campos estén presentes
    if (isset($_POST['altura'], $_POST['peso'], $_POST['edad'])) {
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $edad = $_POST['edad'];

        $respuestaIA = obtenerRespuestaIA($altura, $peso, $edad);
    } else {
        $respuestaIA = "Por favor, completa todos los campos del formulario.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Salud con IA</title>
    <!-- Resto de tu código HTML para el head -->
</head>
<body>
<div class="container">
    <h1 class="text-center">Consulta de Salud con IA</h1>
    <form method="post">
        <div class="form-group">
            <label>Altura en metros:</label>
            <input type="number" class="form-control" name="altura" placeholder="Ejemplo: 1.75" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Peso en kilogramos:</label>
            <input type="number" class="form-control" name="peso" placeholder="Ejemplo: 70" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Edad:</label>
            <input type="number" class="form-control" name="edad" placeholder="Ejemplo: 30" required>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
    <?php if (!empty($respuestaIA)): ?>
        <div class="alert alert-info mt-4">
            <strong>Respuesta de IA:</strong> <br>
            <?php echo htmlspecialchars($respuestaIA); ?>
        </div>
    <?php endif; ?>
</div>
<!-- Resto de tu código HTML para el footer -->
<?php include '../inicio/footer.php'; ?>
</body>
</html>
