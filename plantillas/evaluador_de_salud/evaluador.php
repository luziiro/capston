<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../inicio/header.php';

// Función para obtener la respuesta de la IA (debes implementar esta función)
function obtenerRespuestaIA($altura, $peso, $edad) {
    // Aquí deberías implementar la lógica para generar recomendaciones de dieta y ejercicio
    // basadas en los datos del usuario (altura, peso, edad).
    
    // Por ahora, simplemente devolvemos un mensaje de ejemplo.
    $dieta = "Dieta recomendada: Consume una dieta equilibrada con frutas, verduras, proteínas magras y carbohidratos saludables.";
    $rutinaEjercicio = "Rutina de ejercicio recomendada: Realiza al menos 30 minutos de ejercicio cardiovascular moderado, como caminar o nadar, 5 días a la semana. Además, incorpora ejercicios de fuerza para fortalecer tus músculos.";
    
    return "LA RECOMENDACION ES:\n\n$dieta\n\n$rutinaEjercicio";
}

$recomendacion = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST['altura'] ?? '';
    $peso = $_POST['peso'] ?? '';
    $edad = $_POST['edad'] ?? '';

    // Llama a la función obtenerRespuestaIA con los datos del usuario
    $recomendacion = obtenerRespuestaIA($altura, $peso, $edad);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chat de Salud con IA</title>
    <!-- Agrega la siguiente línea para cargar Bootstrap y jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        /* Estilo personalizado para el modal */
        .custom-modal {
            max-width: 80%; /* Ancho máximo personalizado */
            margin: 0 auto; /* Centrar horizontalmente */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Chat de Salud con IA</h1>
            <p class="text-center">Introduce tus datos de salud y recibe recomendaciones:</p>

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
                <!-- Puedes añadir más campos aquí según sea necesario -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal para mostrar la respuesta de la IA (modal-lg personalizado) -->
<div class="modal fade" id="respuestaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal" role="document"> <!-- Agrega la clase custom-modal aquí -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Respuesta de la IA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí se mostrará la respuesta de la IA después de enviar el formulario -->
                <pre><?php echo $recomendacion; ?></pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php
// Verifica si hay una respuesta de la IA y muestra el modal si es necesario
if (!empty($recomendacion)) {
    echo '<script>$("#respuestaModal").modal("show");</script>';
}

include '../inicio/footer.php';
?>
</body>
</html>
