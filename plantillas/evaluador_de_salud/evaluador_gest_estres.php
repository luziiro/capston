<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Gestión del Estrés</h1>
    <p>Aprende a manejar el estrés y la relajación para mantener un estilo de vida saludable.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Diario de Estrés</h2>
            <p>Lleva un registro de tus niveles de estrés y actividades relacionadas:</p>
            <form>
                <div class="form-group">
                    <label for="stress-level">Nivel de estrés (del 1 al 10):</label>
                    <input type="number" class="form-control" id="stress-level" min="1" max="10">
                </div>
                <div class="form-group">
                    <label for="stress-activity">Actividad relacionada con el estrés:</label>
                    <input type="text" class="form-control" id="stress-activity">
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Registrar Estrés</button>
            </form>
            <!-- Resultado de nivel de estrés promedio -->
            <div id="stress-results"></div>
        </div>
        <div class="col-md-6">
            <h2>Técnicas de Relajación</h2>
            <p>Descubre técnicas efectivas para reducir el estrés y mejorar tu bienestar:</p>
            <ul>
                <li>Técnica de respiración profunda</li>
                <li>Yoga y estiramientos</li>
                <li>Meditación</li>
            </ul>
        </div>
    </div>
</div>

<?php include '../inicio/footer.php'; ?>

<!-- JavaScript para calcular el nivel de estrés promedio -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const stressEntries = []; // Almacenar registros de estrés

        const stressForm = document.querySelector('form');
        const stressLevelInput = document.querySelector('#stress-level');
        const stressActivityInput = document.querySelector('#stress-activity');
        const stressResults = document.querySelector('#stress-results');

        stressForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const stressLevel = parseInt(stressLevelInput.value);
            const stressActivity = stressActivityInput.value;

            if (stressLevel >= 1 && stressLevel <= 10) {
                stressEntries.push({ level: stressLevel, activity: stressActivity });
                calculateStressAverage();
            } else {
                alert("Por favor, ingresa un nivel de estrés válido (del 1 al 10).");
            }

            // Limpiar los campos después de enviar el registro
            stressLevelInput.value = '';
            stressActivityInput.value = '';
        });

        function calculateStressAverage() {
            if (stressEntries.length === 0) {
                stressResults.innerHTML = 'No hay registros de estrés.';
                return;
            }

            const totalStress = stressEntries.reduce((acc, entry) => acc + entry.level, 0);
            const averageStress = totalStress / stressEntries.length;

            stressResults.innerHTML = `Nivel de estrés promedio: ${averageStress.toFixed(2)}`;
        }
    });
</script>
