<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Hábitos de Vida</h1>
    <p>Evalúa y registra tus hábitos diarios para mantener un estilo de vida saludable y recibe recomendaciones para mejorar tu salud.</p>
    <div class="container my-4">
        <form method="post" action="evuador_api_vida.php">
            <div class="question">
                <h2>Nivel de Actividad Física Actual</h2>
                <label for="activity-level">Selecciona tu nivel de actividad:</label>
                <select class="form-control" id="activity-level" name="activity-level">
                    <option value="sedentary">Sedentario</option>
                    <option value="lightly-active">Poco Activo</option>
                    <option value="moderately-active">Moderadamente Activo</option>
                    <option value="very-active">Muy Activo</option>
                </select>
            </div>
            <div class="question">
                <h2>Consumo de Tabaco</h2>
                <label for="smoking-habit">¿Fumas tabaco?</label>
                <select class="form-control" id="smoking-habit" name="smoking-habit">
                    <option value="regularly">Regularmente</option>
                    <option value="occasionally">Ocasionalmente</option>
                    <option value="never">Nunca</option>
                </select>
            </div>
            <div class="question">
                <h2>Consumo de Alcohol</h2>
                <label for="alcohol-habit">¿Consumes alcohol?</label>
                <select class="form-control" id="alcohol-habit" name="alcohol-habit">
                    <option value="regularly">Regularmente</option>
                    <option value="occasionally">Ocasionalmente</option>
                    <option value="never">Nunca</option>
                </select>
            </div>
            <div class="question">
                <h2>Hábitos Alimenticios</h2>
                <label for="eating-habits">Selecciona tus hábitos alimenticios:</label>
                <select class="form-control" id="eating-habits" name="eating-habits">
                    <option value="balanced-diet">Dieta Balanceada</option>
                    <option value="vegetarian">Vegetariano</option>
                    <option value="vegan">Vegano</option>
                    <option value="low-carb">Baja en Carbohidratos</option>
                    <option value="other">Otro (Especificar en comentarios)</option>
                </select>
            </div>
            <button style="margin-top: 10px" class="btn-eva" id="calcularBtn">Calcular Evaluación</button>
        </form>
    </div>
    <?php if (isset($_SESSION['respuestaIA']) && !empty($_SESSION['respuestaIA'])): ?>
    <div class="alert alert-info mt-4">
        <strong>Respuesta de IA:</strong> <br>
        <?php echo htmlspecialchars($_SESSION['respuestaIA']); ?>
    </div>
    <?php unset($_SESSION['respuestaIA']); // Limpia la variable de sesión después de mostrarla ?>
    <?php endif; ?>
</div>

<?php include '../inicio/footer.php'; ?>
