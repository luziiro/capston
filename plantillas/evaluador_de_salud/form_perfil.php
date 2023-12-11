<?php include '../inicio/header.php';?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Perfil de Salud</h4>
                    </div>
                    <div class="card-body">
                        <form action="procesar_datos.php" method="post">
                            <div class="form-group">
                                <label for="peso">Peso (kg):</label>
                                <input type="number" class="form-control" id="peso" name="peso">
                            </div>
                            <div class="form-group">
                                <label for="altura">Altura (cm):</label>
                                <input type="number" class="form-control" id="altura" name="altura">
                            </div>
                            <div class="form-group">
                                <label for="condiciones">Condiciones Médicas (dejar en blanco si no tiene ninguna):</label>
                                <textarea class="form-control" id="condiciones" name="condiciones"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="medicaciones">Medicaciones Actuales (dejar en blanco si no tiene ninguna):</label>
                                <textarea class="form-control" id="medicaciones" name="medicaciones"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="historial_familiar">Historial Familiar de Enfermedades(dejar en blanco si no sabe):</label>
                                <textarea class="form-control" id="historial_familiar" name="historial_familiar"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="habitos_alimenticios">Hábitos Alimenticios(tipo de comida que mas consumes):</label>
                                <textarea class="form-control" id="habitos_alimenticios" name="habitos_alimenticios"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="consumo_alcohol">Consumo de Alcohol (veces por semana):</label>
                                <input class="form-control" id="consumo_alcohol" name="consumo_alcohol">
                            </div>
                            <div class="form-group">
                                <label for="consumo_tabaco">Consumo de Tabaco (veces por semana):</label>
                                <input class="form-control" id="consumo_tabaco" name="consumo_tabaco">
                            </div>
                            <div class="form-group">
                                <label for="calidad_sueno">Calidad del Sueño:</label>
                                <textarea class="form-control" id="calidad_sueno" name="calidad_sueno"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="presion_arterial">Presión Arterial:</label>
                                <input type="text" class="form-control" id="presion_arterial" name="presion_arterial">
                            </div>
                            <div class="form-group">
                                <label for="frecuencia_cardiaca">Frecuencia Cardíaca:</label>
                                <input type="text" class="form-control" id="frecuencia_cardiaca" name="frecuencia_cardiaca">
                            </div>
                            <div class="form-group">
                                <label for="estilo_vida">Estilo de Vida (Sedentario, Activo, etc):</label>
                                <textarea class="form-control" id="estilo_vida" name="estilo_vida"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="objetivos">Objetivos de Salud:</label>
                                <textarea class="form-control" id="objetivos" name="objetivos"></textarea>
                            </div>
                            <button style="margin-top: 10px" type="submit" class="btn-eva">Enviar Datos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../inicio/footer.php'; ?>