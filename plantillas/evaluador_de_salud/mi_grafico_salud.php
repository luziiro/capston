<?php include '../inicio/header.php'; ?>

    <canvas id="miGraficoSalud"></canvas>

    <script>
        var ctx = document.getElementById('miGraficoSalud').getContext('2d');
        var miGrafico = new Chart(ctx, {
            type: 'line', // Puedes cambiar esto a 'bar' para un gráfico de barras
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'], // Estos serían los meses o fechas
                datasets: [{
                    label: 'Peso (kg)',
                    data: [70, 68, 66, 65, 64], // Aquí irían los datos del peso
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>


<?php include '../inicio/footer.php'; ?>