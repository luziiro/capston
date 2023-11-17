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
            <?php if (isset($_SESSION['respuestaIA']) && !empty($_SESSION['respuestaIA'])): ?>
            <div class="alert alert-info mt-4">
                <strong>Respuesta de IA:</strong> <br>
                <?php echo htmlspecialchars($_SESSION['respuestaIA']); ?>
            </div>
            <?php unset($_SESSION['respuestaIA']); // Limpia la variable de sesión después de mostrarla ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include '../inicio/footer.php'; ?>
