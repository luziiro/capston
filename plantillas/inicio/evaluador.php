<?php include 'header.php'; ?>

<h1>Evaluador de Salud Personalizado</h1>
<p>Por favor, responde las siguientes preguntas para recibir una evaluación de tu salud:</p>

<form method="post" action="procesar.php"> <!-- Asegúrate de que el atributo "action" apunte al archivo correcto -->
    <!-- Pregunta 1: Horas de sueño -->
    <label for="pregunta1">1. ¿Cuántas horas duermes por noche?</label>
    <input type="number" name="pregunta1" min="0" step="0.5" placeholder="Horas"><br><br>

    <!-- Pregunta 2: Ejercicio semanal -->
    <label for="pregunta2">2. ¿Cuántas veces a la semana haces ejercicio?</label>
    <input type="number" name="pregunta2" min="0" placeholder="Veces por semana"><br><br>

    <!-- Pregunta 3: Consumo de frutas y verduras -->
    <label for="pregunta3">3. ¿Cons umes frutas y verduras regularmente?</label>
    <select name="pregunta3">
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select><br><br>
    

    <!-- Pregunta 4: Peso en kilogramos -->
    <label for="pregunta4">4. ¿Cuál es tu peso actual en kilogramos?</label>
    <input type="number" name="pregunta4" min="0" step="0.1" placeholder="Peso (kg)"><br><br>

    <!-- Pregunta 5: Altura en centímetros -->
    <label for="pregunta5">5. ¿Cuál es tu altura en centímetros?</label>
    <input type="number" name="pregunta5" min="0" placeholder="Altura (cm)"><br><br>

    <!-- Pregunta 6: Edad -->
    <label for="pregunta6">6. ¿Cuál es tu edad?</label>
    <input type="number" name="pregunta6" min="0" placeholder="Edad"><br><br>

    <!-- Botón para calcular la evaluación -->
    <input type="submit" value="Calcular Evaluación">
</form>

<!-- Espacio para mostrar la evaluación -->
<div id="resultado"></div>

<!-- Espacio para mostrar el gráfico -->
<div id="grafico"></div>

<?php include 'footer.php'; ?>
