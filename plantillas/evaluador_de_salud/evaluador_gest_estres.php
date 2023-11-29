<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Gestión del Estrés</h1>
    <p>Aprende a manejar el estrés y la relajación para mantener un estilo de vida saludable.</p>
    <h2>Diario de Estrés</h2>
    <p>Describe tus experiencias y sentimientos relacionados con el estrés:</p>
    <form method="post" action="evuador_api_estres.php">
        <div class="form-group">
            <label for="stress_description">Describa su situación actual de estrés:</label>
            <textarea class="form-control" id="stress_description" name="stress_description" rows="3" placeholder="Escribe aquí sobre tu situación de estrés..."></textarea>
        </div>
        <div class="form-group">
            <label for="stress_causes">¿Cuáles crees que son las causas de tu estrés?</label>
            <textarea class="form-control" id="stress_causes" name="stress_causes" rows="3" placeholder="Escribe aquí sobre las posibles causas de tu estrés..."></textarea>
        </div>
        <div class="form-group">
            <label for="stress_impact">¿Cómo te afecta el estrés en tu vida diaria?</label>
            <textarea class="form-control" id="stress_impact" name="stress_impact" rows="3" placeholder="Escribe aquí sobre cómo te afecta el estrés..."></textarea>
        </div>
        <div class="form-group">
            <label for="stress_coping">¿Cómo sueles manejar el estrés?</label>
            <textarea class="form-control" id="stress_coping" name="stress_coping" rows="3" placeholder="Escribe aquí sobre tus estrategias para manejar el estrés..."></textarea>
        </div>
        <button style="margin-top: 10px" type="submit" class="btn-eva">Registrar Estrés</button>
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
