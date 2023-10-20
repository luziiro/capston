<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Nutrición</h1>
    <p>Administra tu dieta y consumo de calorías para mantener un estilo de vida saludable.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Calculadora de Calorías</h2>
            <p>Ingresa tu información para calcular tus necesidades calóricas diarias:</p>
            <form id="calories-form">
                <div class="form-group">
                    <label for="age">Edad:</label>
                    <input type="number" class="form-control" id="age">
                </div>
                <div class="form-group">
                    <label for="weight">Peso (kg):</label>
                    <input type="number" class="form-control" id="weight">
                </div>
                <div class="form-group">
                    <label for="height">Altura (cm):</label>
                    <input type="number" class="form-control" id="height">
                </div>
                <!-- Agrega más variables según tus necesidades -->
                <div class="form-group">
                    <label for="activity-level">Nivel de actividad:</label>
                    <select class="form-control" id="activity-level">
                        <option value="sedentary">Sedentario</option>
                        <option value="lightly-active">Poco activo</option>
                        <option value="moderately-active">Moderadamente activo</option>
                        <option value="very-active">Muy activo</option>
                        <option value="super-active">Súper activo</option>
                    </select>
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Calcular</button>
            </form>
            <div id="calories-result">
                <!-- Aquí se mostrará el resultado del cálculo -->
            </div>
        </div>
        <div class="col-md-6">
            <h2>Plan de Comidas</h2>
            <p>Recibe un plan de comidas personalizado para alcanzar tus objetivos de salud:</p>
            <form>
                <div class="form-group">
                    <label for="goal">Objetivo:</label>
                    <select class="form-control" id="goal">
                        <option value="weight-loss">Pérdida de peso</option>
                        <option value="maintenance">Mantenimiento</option>
                        <option value="weight-gain">Aumento de peso</option>
                    </select>
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Generar Plan</button>
            </form>
            <div id="meal-plan">
                <!-- Aquí se mostrará el plan de comidas -->
            </div>
        </div>
    </div>
</div>

<?php include '../inicio/footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const caloriesForm = document.querySelector('#calories-form');
        const caloriesResult = document.querySelector('#calories-result');

        caloriesForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Obtén los valores ingresados
            const age = parseFloat(document.querySelector('#age').value);
            const weight = parseFloat(document.querySelector('#weight').value);
            const height = parseFloat(document.querySelector('#height').value);
            const activityLevel = document.querySelector('#activity-level').value;

            // Realiza el cálculo de calorías (puedes personalizar esta fórmula)
            let calories = 10 * weight + 6.25 * height - 5 * age;

            // Ajusta las calorías según el nivel de actividad
            if (activityLevel === 'sedentary') {
                calories *= 1.2;
            } else if (activityLevel === 'lightly-active') {
                calories *= 1.375;
            } else if (activityLevel === 'moderately-active') {
                calories *= 1.55;
            } else if (activityLevel === 'very-active') {
                calories *= 1.725;
            } else if (activityLevel === 'super-active') {
                calories *= 1.9;
            }

            // Muestra el resultado
            caloriesResult.innerHTML = `Necesitas aproximadamente ${calories.toFixed(2)} calorías al día.`;
        });
    });
</script>
