<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Gestión del Estrés</h1>
    <p>Aprende a manejar el estrés y la relajación para mantener un estilo de vida saludable.</p>
    <h2>Diario de Estrés</h2>
    <p>Lleva un registro de tus niveles de estrés y cómo te afectan:</p>
    <form method="post" action="evuador_api_estres.php">
        <div class="form-group">
            <label for="stress-duration">¿Cuánto tiempo has estado experimentando estrés significativo?</label>
            <select class="form-control" id="stress_duration" name="stress_duration" onchange="showHideCustomInput(this, 'duration_custom')">
                <option value="momentaneo">Unas pocas horas</option>
                <option value="corto">Algunos días</option>
                <option value="crónico">Varias semanas o más</option>
                <option value="otro">Otro (especificar)</option>
            </select>
            <input type="text" name="duration_custom" class="form-control mt-2" id="duration_custom" placeholder="Especifique la duración" style="display: none;">
        </div>
        <div class="form-group">
            <label for="stress-trigger">¿Qué crees que está causando tu estrés?</label>
            <select class="form-control" id="stress_trigger" name="stress_trigger" onchange="showHideCustomInput(this, 'trigger_custom')">
                <option value="trabajo">Presión laboral</option>
                <option value="relaciones">Desafíos en relaciones personales</option>
                <option value="salud">Preocupaciones por la salud</option>
                <option value="finanzas">Dificultades financieras</option>
                <option value="otro">Otro (especificar)</option>
            </select>
            <input type="text" name="trigger_custom" class="form-control mt-2" id="trigger_custom" placeholder="Especifique el desencadenante" style="display: none;">
        </div>
        <div class="form-group">
            <label for="stress-response">¿Cómo sueles reaccionar al estrés?</label>
            <select class="form-control" id="stress_response" name="stress_response">
                <option value="evitacion">Intentando evitar la situación</option>
                <option value="enfrentamiento">Enfrentando el problema directamente</option>
                <option value="busqueda_ayuda">Buscando apoyo de amigos o profesionales</option>
                <option value="ninguna">No estoy seguro/a</option>
            </select>
        </div>
        <button style="margin-top: 10px" type="submit" class="btn-eva">Registrar Estrés</button>
    </form>
    <?php if (isset($_SESSION['respuestaIA']) && !empty($_SESSION['respuestaIA'])): ?>
    <div class="alert alert-info mt-4">
        <strong>Respuesta de IA:</strong> <br>
        <?php echo htmlspecialchars($_SESSION['respuestaIA']); ?>
    </div>
    <?php unset($_SESSION['respuestaIA']); // Limpia la variable de sesión después de mostrarla ?>
    <?php endif; ?>
</div>

<script>
    function showHideCustomInput(select, customInputId) {
        var selectedOption = select.value;
        var customInput = document.getElementById(customInputId);
        if (selectedOption === 'otro') {
            customInput.style.display = 'block';
        } else {
            customInput.style.display = 'none';
        }
    }
</script>

<?php include '../inicio/footer.php'; ?>
