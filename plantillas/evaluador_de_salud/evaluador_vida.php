<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Hábitos de Vida</h1>
    <p>Evalúa y registra tus hábitos diarios para mantener un estilo de vida saludable y recibe recomendaciones para mejorar tu salud.</p>

    <div class="container my-4">
        <div class="question">
            <h2>Nivel de Actividad Física Actual</h2>
            <label for="activity-level">Selecciona tu nivel de actividad:</label>
            <select class="form-control" id="activity-level">
                <option value="sedentary">Sedentario</option>
                <option value="lightly-active">Poco Activo</option>
                <option value="moderately-active">Moderadamente Activo</option>
                <option value="very-active">Muy Activo</option>
            </select>
        </div>

        <div class="question">
            <h2>Consumo de Tabaco</h2>
            <label for="smoking-habit">¿Fumas tabaco?</label>
            <select class="form-control" id="smoking-habit">
                <option value="regularly">Regularmente</option>
                <option value="occasionally">Ocasionalmente</option>
                <option value="never">Nunca</option>
            </select>
        </div>

        <div class="question">
            <h2>Consumo de Alcohol</h2>
            <label for="alcohol-habit">¿Consumes alcohol?</label>
            <select class="form-control" id="alcohol-habit">
                <option value="regularly">Regularmente</option>
                <option value="occasionally">Ocasionalmente</option>
                <option value="never">Nunca</option>
            </select>
        </div>

        <div class="question">
            <h2>Hábitos Alimenticios</h2>
            <label for="eating-habits">Selecciona tus hábitos alimenticios:</label>
            <select class="form-control" id="eating-habits">
                <option value="balanced-diet">Dieta Balanceada</option>
                <option value="vegetarian">Vegetariano</option>
                <option value="vegan">Vegano</option>
                <option value="low-carb">Baja en Carbohidratos</option>
                <option value="other">Otro (Especificar en comentarios)</option>
            </select>
        </div>

        <button style="margin-top: 10px" class="btn btn-primary" id="calcularBtn">Calcular Evaluación</button>
    </div>
</div>

<!-- Modal para mostrar recomendaciones -->
<div class="modal fade" id="resultadoModal" tabindex="-1" role="dialog" aria-labelledby="resultadoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultadoModalLabel">Recomendación para mejorar tu salud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="cerrarModalBtn">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Recomendación se mostrará aquí -->
                <p id="recomendacionText">Aquí aparecerá tu recomendación personalizada para mejorar tu salud.</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("calcularBtn").addEventListener("click", function() {
        // Aquí debes realizar los cálculos y generar recomendaciones
        // Para simplificar, dejaremos una recomendación de ejemplo
        var recomendacion = "Hemos calculado tus hábitos y te recomendamos hacer ejercicio regularmente y llevar una dieta equilibrada para mejorar tu salud.";

        // Mostrar la recomendación en la ventana modal
        document.getElementById("recomendacionText").textContent = recomendacion;
        $('#resultadoModal').modal('show');
    });

    // Botón para cerrar la ventana modal
    document.getElementById("cerrarModalBtn").addEventListener("click", function() {
        $('#resultadoModal').modal('hide');
    });
</script>

<?php include '../inicio/footer.php'; ?>
