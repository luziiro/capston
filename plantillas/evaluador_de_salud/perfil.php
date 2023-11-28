<?php include '../inicio/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - Salud</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Perfil de Salud</h4>
                    </div>
                    <div class="card-body">
                        <form action="procesar_datos.php" method="post">
                            <!-- Datos Personales -->
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad">
                            </div>

                            <!-- Datos de Salud -->
                            <div class="form-group">
                                <label for="peso">Peso (kg):</label>
                                <input type="number" class="form-control" id="peso" name="peso">
                            </div>
                            <div class="form-group">
                                <label for="altura">Altura (cm):</label>
                                <input type="number" class="form-control" id="altura" name="altura">
                            </div>
                            <div class="form-group">
                                <label for="condiciones">Condiciones Médicas (si aplica):</label>
                                <textarea class="form-control" id="condiciones" name="condiciones"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="medicaciones">Medicaciones Actuales (si aplica):</label>
                                <textarea class="form-control" id="medicaciones" name="medicaciones"></textarea>
                            </div>

                            <!-- Estilo de Vida y Objetivos -->
                            <div class="form-group">
                                <label for="estilo_vida">Estilo de Vida (Ejercicio, Dieta, Sueño):</label>
                                <textarea class="form-control" id="estilo_vida" name="estilo_vida"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="objetivos">Objetivos de Salud:</label>
                                <textarea class="form-control" id="objetivos" name="objetivos"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar Datos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php include '../inicio/footer.php'; ?>