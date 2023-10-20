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
                <div class="form-group">
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

        caloriesForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Obtén los valores ingresados
            const age = parseFloat(document.querySelector('#age').value);
            const weight = parseFloat(document.querySelector('#weight').value);
            const height = parseFloat(document.querySelector('#height').value);
            const activityLevel = document.querySelector('#activity-level').value;

            // Realiza el cálculo de calorías (personaliza esta fórmula)
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

            // Muestra el resultado en el modal
            const caloriesModalContent = document.querySelector('#calories-modal-content');
            caloriesModalContent.textContent = `Necesitas aproximadamente ${calories.toFixed(2)} calorías al día.`;
            const caloriesModal = new bootstrap.Modal(document.querySelector('#calories-modal'));
            caloriesModal.show();
        });

        mealPlanForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Obtén el objetivo seleccionado por el usuario
            const goal = document.querySelector('#meal-plan-goal').value;

            // Ejemplo de planes de comidas básicos (personaliza según tus necesidades)
            let mealPlan = '';

            if (goal === 'weight-loss') {
                mealPlan = 'Desayuno: Avena con frutas\nAlmuerzo: Pollo a la parrilla con ensalada\nCena: Salmón con brócoli';
            } else if (goal === 'maintenance') {
                mealPlan = 'Desayuno: Yogur y frutas\nAlmuerzo: Sándwich de pavo\nCena: Tacos de pescado';
            } else if (goal === 'weight-gain') {
                mealPlan = 'Desayuno: Batido de proteínas\nAlmuerzo: Pasta con albóndigas\nCena: Ensalada de atún';
            }

            // Muestra el resultado en el modal
            const mealPlanModalContent = document.querySelector('#meal-plan-modal-content');
            mealPlanModalContent.textContent = mealPlan;
            const mealPlanModal = new bootstrap.Modal(document.querySelector('#meal-plan-modal'));
            mealPlanModal.show();
        });
    });
</script>
