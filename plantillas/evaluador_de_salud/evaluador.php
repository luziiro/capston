<?php include '../inicio/header.php'; ?>

<h1>Evaluador de Salud Personalizado</h1>
<p>Por favor, responde las siguientes preguntas para recibir una evaluación de tu salud:</p>

<form method="post" action="procesar.php">
    <label for="altura">Altura en metros:</label>
    <input type="number" name="altura" step="0.01" required><br><br>

    <label for="peso">Peso en kilogramos:</label>
    <input type="number" name="peso" step="0.01" required><br><br>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" required><br><br>

    <label for="horas_sueno">Horas de sueño por noche:</label>
    <input type="number" name="horas_sueno" step="0.5" required><br><br>

    <label for="ejercicio_semanal">Veces por semana que haces ejercicio:</label>
    <input type="number" name="ejercicio_semanal" required><br><br>

    <label for="consume_frutas_verduras">¿Consumes frutas y verduras regularmente?</label>
    <select name="consume_frutas_verduras" required>
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="colesterol">Nivel de colesterol (mg/dL):</label>
    <input type="number" name="colesterol" step="1" required><br><br>

    <label for="presion_arterial">Presión arterial (mm Hg):</label>
    <input type="number" name="presion_arterial" step="1" required><br><br>

    <input type="submit" value="Calcular Evaluación">
</form>

<div id="resultado"></div>
<div id="grafico"></div>

<?php include '../inicio/footer.php'; ?>
