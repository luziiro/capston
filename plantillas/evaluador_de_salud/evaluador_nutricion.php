<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Nutrición</h1>
    <p>Administra tu dieta y consumo de calorías para mantener un estilo de vida saludable.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Calculadora de Calorías</h2>
            <p>Ingresa tu información para calcular tus necesidades calóricas diarias:</p>
            <form id="calories-form">
                <!-- Campos de entrada -->
                <div class="form-group">
                    <label for="age">Edad:</label>
                    <input type="number" class="form-control" id="age">
                </div>
                <div class="form-group">
                    <label for="weight">Peso (kg):</label>
                    <input type="number" class="form-control" id="weight">
                </div>
                <div class "form-group">
                    <label for="height">Altura (cm):</label>
                    <input type="number" class="form-control" id="height">
                </div>
                <!-- Nivel de actividad -->
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
            <!-- Resultado de calorías -->
            <div id="calories-result">
                <!-- Aquí se mostrará el resultado del cálculo -->
            </div>
        </div>
        <div class="col-md-6">
            <h2>Plan de Comidas</h2>
            <p>Recibe un plan de comidas personalizado para alcanzar tus objetivos de salud:</p>
            <form id="meal-plan-form">
                <!-- Objetivo de comida -->
                <div class="form-group">
                    <label for="meal-plan-goal">Objetivo:</label>
                    <select class="form-control" id="meal-plan-goal">
                        <option value="weight-loss">Pérdida de peso</option>
                        <option value="maintenance">Mantenimiento</option>
                        <option value="weight-gain">Aumento de peso</option>
                    </select>
                </div>
                <!-- Nivel de actividad -->
                <div class="form-group">
                    <label for="activity-level">Nivel de actividad:</label>
                    <select class="form-control" id="activity-level-meal">
                        <option value="sedentary">Sedentario</option>
                        <option value="lightly-active">Poco activo</option>
                        <option value="moderately-active">Moderadamente activo</option>
                        <option value="very-active">Muy activo</option>
                        <option value="super-active">Súper activo</option>
                    </select>
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Generar Plan</button>
            </form>
            <!-- Resultado del plan de comidas -->
            <div id="meal-plan">
                <!-- Aquí se mostrará el plan de comidas -->
            </div>
        </div>
    </div>
</div>

<?php include '../inicio/footer.php'; ?>

<!-- Modales -->
<div class="modal" tabindex="-1" role="dialog" id="calories-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Resultado de Calorías</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="calories-modal-content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="meal-plan-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Plan de Comidas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="meal-plan-modal-content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const caloriesForm = document.querySelector('#calories-form');
        const caloriesResult = document.querySelector('#calories-result');
        const mealPlanForm = document.querySelector('#meal-plan-form');
        const mealPlanResult = document.querySelector('#meal-plan');

        const mealPlans = {
            'weight-loss': 'Desayuno: Avena con frutas y yogur bajo en grasa. Almuerzo: Ensalada de pollo a la parrilla con verduras. Cena: Salmón a la parrilla con brócoli.',
            'maintenance': 'Desayuno: Batido de proteínas y avena. Almuerzo: Sándwich de pavo con aguacate. Cena: Pechuga de pollo a la parrilla con espárragos.',
            'weight-gain': 'Desayuno: Batido de proteínas con plátano y avena. Almuerzo: Pasta integral con albóndigas de pavo. Cena: Ensalada de atún con aguacate.',
        };

        const exercises = {
            'sedentary': 'Ejercicio recomendado: Caminar 30 minutos al día o realizar ejercicios de estiramiento.',
            'lightly-active': 'Ejercicio recomendado: Caminar 30-45 minutos al día o nadar 2-3 veces por semana.',
            'moderately-active': 'Ejercicio recomendado: 3-4 días de entrenamiento cardiovascular y pesas durante 45-60 minutos.',
            'very-active': 'Ejercicio recomendado: 5-6 días de entrenamiento cardiovascular y pesas durante 60 minutos.',
            'super-active': 'Ejercicio recomendado: Entrenamiento avanzado 6-7 días a la semana, con sesiones de alta intensidad.',
        };

        caloriesForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Realiza el cálculo de calorías...
            // Supongamos que los resultados del cálculo se almacenan en la variable 'calories'
            const calories = 2500;
            const caloriesModalContent = document.querySelector('#calories-modal-content');
            caloriesModalContent.textContent = `Necesitas aproximadamente ${calories.toFixed(2)} calorías al día.`;
            const caloriesModal = new bootstrap.Modal(document.querySelector('#calories-modal'));
            caloriesModal.show();
        });

        mealPlanForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const goal = document.querySelector('#meal-plan-goal').value;
            const activityLevel = document.querySelector('#activity-level-meal').value;

            const selectedMealPlan = mealPlans[goal];
            const selectedExercise = exercises[activityLevel];

            const mealPlanModalContent = document.querySelector('#meal-plan-modal-content');
            mealPlanModalContent.innerHTML = `<h3>Plan de Comidas</h3><p>${selectedMealPlan}</p><h3>Ejercicio Recomendado</h3><p>${selectedExercise}</p>`;
            const mealPlanModal = new bootstrap.Modal(document.querySelector('#meal-plan-modal'));
            mealPlanModal.show();
        });
    });
</script>
