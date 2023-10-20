<?php include '../inicio/header.php'; ?>

<div class="container mt-5">
    <h1>Gestión del Estrés</h1>
    <p>Aprende a manejar el estrés y la relajación para mantener un estilo de vida saludable.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Diario de Estrés</h2>
            <p>Lleva un registro de tus niveles de estrés y actividades relacionadas:</p>
            <form id="stress-form">
                <div class="form-group">
                    <label for="stress-level">Nivel de estrés (del 1 al 10):</label>
                    <input type="number" class="form-control" id="stress-level" min="1" max="10">
                </div>
                <div class="form-group">
                    <label for="stress-activity">Actividad relacionada con el estrés:</label>
                    <select class="form-control" id="stress-activity">
                        <option value="trabajo">Trabajo</option>
                        <option value="familia">Problemas familiares</option>
                        <option value="estudios">Estudios</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Registrar Estrés</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Registro de Estrés</h2>
            <p>Aquí se muestra tu registro de niveles de estrés:</p>
            <canvas id="stress-chart"></canvas>
            <p id="stress-average-result"></p>
        </div>
    </div>
</div>

<?php include '../inicio/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const stressLevels = [];
        const stressActivities = [];
        const stressChart = document.querySelector("#stress-chart");
        const stressAverageResult = document.querySelector("#stress-average-result");

        const stressChartConfig = {
            type: "bar",
            data: {
                labels: [],
                datasets: [{
                    label: "Nivel de Estrés",
                    data: [],
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 10
                    }
                }
            }
        };

        const stressChartInstance = new Chart(stressChart, stressChartConfig);

        document.querySelector("#stress-form").addEventListener("submit", function(e) {
            e.preventDefault();
            const stressLevel = parseInt(document.querySelector("#stress-level").value);
            const stressActivity = document.querySelector("#stress-activity").value;
            stressLevels.push(stressLevel);
            stressActivities.push(stressActivity);

            // Actualizar el gráfico
            stressChartConfig.data.labels.push(stressActivities[stressActivities.length - 1]);
            stressChartConfig.data.datasets[0].data.push(stressLevels[stressLevels.length - 1]);
            stressChartInstance.update();

            // Calcular el nivel de estrés promedio
            const totalStress = stressLevels.reduce((acc, level) => acc + level, 0);
            const averageStress = (totalStress / stressLevels.length).toFixed(2);
            stressAverageResult.textContent = `Tu nivel de estrés promedio es: ${averageStress}`;
        });
    });
</script>
