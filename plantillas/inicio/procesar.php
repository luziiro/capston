<?php
// Obtener respuestas a las preguntas del formulario
$respuesta1 = floatval($_POST['pregunta1']);
$respuesta2 = intval($_POST['pregunta2']);
$respuesta3 = $_POST['pregunta3'];
$respuesta4 = floatval($_POST['pregunta4']);
$respuesta5 = intval($_POST['pregunta5']);
$respuesta6 = intval($_POST['pregunta6']);

// Ejecutar el script de Python y obtener la salida
$pythonScript = 'calcular_evaluacion.py';
$command = escapeshellcmd("python $pythonScript $respuesta1 $respuesta2 $respuesta3 $respuesta4 $respuesta5 $respuesta6");
$output = shell_exec($command);

// Decodificar la salida para obtener la evaluación y los datos del gráfico
list($evaluacion, $grafico) = explode(':::', $output);

// Mostrar la evaluación en la página
echo "<h2>Evaluación de Salud</h2>";
echo "<p>$evaluacion</p>";

// Mostrar el gráfico en la página
echo "<h2>Gráfico de Salud</h2>";
echo "<img src='$grafico' alt='Gráfico de Salud'>";
?>
