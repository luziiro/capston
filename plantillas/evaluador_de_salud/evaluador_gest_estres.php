<?php include '../inicio/header.php'; ?>

    <div class="container mt-5">
        <h1>Gestión del Estrés</h1>
        <p>Aprende a manejar el estrés y la relajación para mantener un estilo de vida saludable.</p>

        <div class="row">
            <div class="col-md-6">
                <h2>Diario de Estrés</h2>
                <p>Lleva un registro de tus niveles de estrés y actividades relacionadas:</p>
                <form>
                    <div class="form-group">
                        <label for="stress-level">Nivel de estrés (del 1 al 10):</label>
                        <input type="number" class="form-control" id="stress-level" min="1" max="10">
                    </div>
                    <div class="form-group">
                        <label for="stress-activity">Actividad relacionada con el estrés:</label>
                        <input type="text" class="form-control" id="stress-activity">
                    </div>
                    <button style="margin-top: 10px" type="submit" class="btn btn-primary">Registrar Estrés</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Técnicas de Relajación</h2>
                <p>Descubre técnicas efectivas para reducir el estrés y mejorar tu bienestar:</p>
                <ul>
                    <li>Técnica de respiración profunda</li>
                    <li>Yoga y estiramientos</li>
                    <li>Meditación</li>
                </ul>
            </div>
        </div>
    </div>

<?php include '../inicio/footer.php'; ?>