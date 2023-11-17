<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
        <h1>Actividad Física</h1>
        <p>Mejora tu estado físico y establece objetivos de ejercicio para mantener un estilo de vida saludable.</p>
 
        <div class="row">
            <div class="col-md-6">
                <h2>Registro de Ejercicio</h2>
                <p>Ingresa los detalles de tu rutina de ejercicio:</p>
                <form>
                    <div class="form-group">
                        <label for="activity">Tipo de actividad:</label>
                        <input type="text" class="form-control" id="activity">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duración (minutos):</label>
                        <input type="number" class="form-control" id="duration">
                    </div>
                    <button style="margin-top: 10px" type="submit" class="btn btn-primary">Registrar Ejercicio</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Objetivos de Ejercicio</h2>
                <p>Establece tus metas y objetivos de actividad física:</p>
                <form>
                    <div class="form-group">
                        <label for="exercise-goal">Tipo de objetivo:</label>
                        <select class="form-control" id="exercise-goal">
                            <option value="weight-loss">Pérdida de peso</option>
                            <option value="fitness">Mejora de la condición física</option>
                            <option value="muscle-gain">Aumento de masa muscular</option>
                        </select>
                    </div>
                    <button style="margin-top: 10px" type="submit" class="btn btn-primary">Establecer Objetivo</button>
                </form>
            </div>
        </div>
    </div>

<?php include '../inicio/footer.php'; ?>