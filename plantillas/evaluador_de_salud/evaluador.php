<?php include '../inicio/header.php'; ?>

<style>
  .center {
    text-align: center;
    margin: 0 auto;
    width: 50%; /* Puedes ajustar el ancho según tus preferencias */
  }

  .form-field {
    background-color: #f7f7f7;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 8px;
    margin-bottom: 10px;
  }

  .form-label {
    font-weight: bold;
  }

  .form-input {
    width: 100%;
    padding: 6px;
  }

  .form-select {
    width: 100%;
    padding: 6px;
  }
</style>

<div class="center">
  <h1>Evaluador de Salud Personalizado</h1>
  <p>Por favor, responde las siguientes preguntas para recibir una evaluación de tu salud:</p>

  <form method="post" action="procesar.php">
    <div class="form-field">
      <label class="form-label" for="altura">Altura en metros:</label>
      <input class="form-input" type="number" name="altura" step="0.01" required>
    </div>

    <div class="form-field">
      <label class="form-label" for "peso">Peso en kilogramos:</label>
      <input class="form-input" type="number" name="peso" step="0.01" required>
    </div>

    <div class="form-field">
      <label class="form-label" for="edad">Edad:</label>
      <input class="form-input" type="number" name="edad" required>
    </div>

    <div class="form-field">
      <label class="form-label" for="horas_sueno">Horas de sueño por noche:</label>
      <input class="form-input" type="number" name="horas_sueno" step="0.5" required>
    </div>

    <div class="form-field">
      <label class="form-label" for="ejercicio_semanal">Veces por semana que haces ejercicio:</label>
      <input class="form-input" type="number" name="ejercicio_semanal" required>
    </div>

    <div class="form-field">
      <label class="form-label" for="consume_frutas_verduras">¿Consumes frutas y verduras regularmente?</label>
      <select class="form-select" name="consume_frutas_verduras" required>
        <option value="si">Sí</option>
        <option value="no">No</option>
      </select>
    </div>

    <div class="form-field">
      <label class="form-label" for="colesterol">Nivel de colesterol (mg/dL):</label>
      <input class="form-input" type="number" name="colesterol" step="1" required>
    </div>

    <div class "form-field">
      <label class="form-label" for="presion_arterial">Presión arterial (mm Hg):</label>
      <input class="form-input" type="number" name="presion_arterial" step="1" required>
    </div>

    <input type="submit" value="Calcular Evaluación">
  </form>

  <div id="resultado"></div>
  <div id="grafico"></div>
</div>

<?php include '../inicio/footer.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (Tu código de procesamiento de datos y recomendaciones aquí)
    // Recuerda agregar el código para la solicitud a la API de OpenAI según lo mencionado anteriormente.
}
?>
