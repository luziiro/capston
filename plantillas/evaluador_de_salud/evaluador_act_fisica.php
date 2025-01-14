<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Actividad Física</h1>
    <p>Mejora tu estado físico y establece objetivos de ejercicio para mantener un estilo de vida saludable.</p>
        <h2>Objetivos de Ejercicio</h2>
        <p>Establece tus metas y objetivos de actividad física:</p>


    <form method="post" action="evuador_api_act_fisica.php">
        <div class="form-group">
            <label for="activity">Tipo de actividad:</label>
            <input type="text" class="form-control" id="activity" name="activity">
            <br>
        </div>
        <div class="form-group">
            <label for="duration">Duración (minutos):</label>
            <input type="number" class="form-control" id="duration" name="duration">
            <br>
        </div>
        <div class="form-group">
            <label for="exercise_goal">Tipo de objetivo:</label>
            <select class="form-control" id="exercise_goal" name="exercise_goal">
                <option value="Pérdida de peso">Pérdida de peso</option>
                <option value="Mejora de la condición física">Mejora de la condición física</option>
                <option value="Aumento de masa muscular">Aumento de masa muscular</option>
            </select>
            <br>
        </div>
        <button style="margin-top: 10px" type="submit" class="btn-eva">Calcular Evaluación</button>
    </form>
    <?php if (isset($_SESSION['respuestaIA']) && !empty($_SESSION['respuestaIA'])): ?>
    <div class="alert alert-info mt-4">
        <strong>Respuesta de IA:</strong> <br>
        <?php echo htmlspecialchars($_SESSION['respuestaIA']); ?>
    </div>
    <?php unset($_SESSION['respuestaIA']); // Limpia la variable de sesión después de mostrarla ?>
    <?php endif; ?>
</div>

<?php include '../inicio/footer.php'; ?>