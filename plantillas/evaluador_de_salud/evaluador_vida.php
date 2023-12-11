<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Hábitos de Vida</h1>
    <p>Evalúa y registra tus hábitos diarios para mantener un estilo de vida saludable y recibe recomendaciones para mejorar tu salud.</p>

    <form method="post" action="evuador_api_vida.php">
        <div class="form-group">
            <label for="activity_level">Describa tu nivel actividad física:</label>
            <textarea class="form-control" id="activity_level" name="activity_level" rows="3" placeholder="Escribe aquí sobre tu nivel actividad física..."></textarea>
        </div>
        <div class="form-group">
            <label for="smoking_habit">Consumo de Tabaco</label>
            <textarea class="form-control" id="smoking_habit" name="smoking_habit" rows="3" placeholder="Escribe aquí tu consumo de tabaco por semana"></textarea>
        </div>
        <div class="form-group">
            <label for="alcohol_habit">Consumo de Alcohol</label>
            <textarea class="form-control" id="alcohol_habit" name="alcohol_habit" rows="3" placeholder="Escribe aquí tu consumo de alcohol por semana"></textarea>
        </div>
        <div class="form-group">
            <label for="eating_habits">Hábitos Alimenticios</label>
            <textarea class="form-control" id="eating_habits" name="eating_habits" rows="3" placeholder="Escribe aquí sobre tus hábitos alimenticios"></textarea>
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
