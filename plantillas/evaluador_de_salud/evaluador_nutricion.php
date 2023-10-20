<?php include '../inicio/header.php'; ?>

    <div class="container mt-5">
        <h1>Nutrición</h1>
        <p>Administra tu dieta y consumo de calorías para mantener un estilo de vida saludable.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h2>Calculadora de Calorías</h2>
                <p>Ingresa tu información para calcular tus necesidades calóricas diarias:</p>
                <form>
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