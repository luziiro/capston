<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluador de Salud Personalizado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Evaluador de Salud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#features">Características</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#demo">Demostración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Regístrate</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <header class="text-center py-5">
        <div class="container">
            <h1 class="display-4">Evaluador de Salud Personalizado</h1>
            <p class="lead">Descubre cómo tus elecciones de hoy pueden influir en tu bienestar futuro.</p>
            <a href="registro.php" class="btn btn-primary btn-lg">Registrate Ahora</a>
        </div>
    </header>
    
    <section class="py-5 bg-light" id="features">
        <div class="container">
            <h2 class="text-center">Características Clave</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Análisis Detallado</h3>
                        <p>Utilizamos algoritmos avanzados para evaluar tu estado de salud actual y predecir posibles riesgos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Visualización Interactiva</h3>
                        <p>Explora visualmente cómo podrías lucir y sentirte en el futuro con cambios en tus hábitos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Comparativa de Escenarios</h3>
                        <p>Compara diferentes escenarios de salud para tomar decisiones informadas sobre tu bienestar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5" id="demo">
        <div class="container">
            <h2 class="text-center">Visualización Interactiva</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>Imagina un futuro más saludable con nuestro simulador interactivo. Cambia tus hábitos y ve cómo impacta en tu bienestar.</p>
                </div>
                <div class="col-md-6">
                    <img src="demo_image.png" alt="Demostración de visualización interactiva" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    
    <footer class="text-center py-4">
        <p>&copy; <?php echo date("Y"); ?> Evaluador de Salud Personalizado</p>
    </footer>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
