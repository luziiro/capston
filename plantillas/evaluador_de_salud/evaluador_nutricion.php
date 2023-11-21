    <?php include '../inicio/header.php';?>

<div class="container">
    <h1 class="text-center">Consulta de Salud con IA</h1>
    <form method="post" action="evuador_api.php">
        <div class="form-group">
            <label for="altura">Ingrese su altura:</label>
            <input class="form-control" placeholder="Ejemplo: 1.75" type="text" id="altura" name="altura" required>
            <br>
        </div>
        <div class="form-group">
            <label for="peso">Ingrese su peso:</label>
            <input class="form-control" placeholder="Ejemplo: 70" type="text" id="peso" name="peso" required>
            <br>
        </div>
        <div class="form-group">
            <label for="edad">Ingrese su edad:</label>
            <input class="form-control" placeholder="Ejemplo: 20" type="text" id="edad" name="edad" required>
            <br>
        </div>
        <button type="submit" value="Obtener Capitales" class="btn btn-primary">Consultar</button>
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
