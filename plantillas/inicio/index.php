<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluador de Salud Personalizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/capston/assets/estilo.css?ver=2">
    <style>
        body {
            overflow: hidden;
            background: #000;
            color: blue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }

        .cambio-color {
            color: blue;
        }

        /* Estilo para el nuevo carrusel de imágenes */
        #carouselEjemplo {
            margin-top: 30px;
        }

        #carouselEjemplo img {
            max-height: 300px; /* Ajusta la altura máxima de las imágenes */
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <video autoplay loop muted playsinline>
        <source src="https://static.videezy.com/system/resources/previews/000/051/538/original/Medical_Health_Background.mp4" type="video/mp4">
    </video>
    <div class="content">
        <header class="text-center py-5">
            <div class="container">
                <?php
                if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario_logueado']) {
                    echo '<h1 class="display-4 cambio-color">Health Future</h1>';
                    echo '<p class="lead">Descubre cómo tus elecciones de hoy pueden influir en tu bienestar futuro.</p>';
                    echo '<a href="/capston/plantillas/evaluador_de_salud/evaluador.php" class="btn btn-primary btn-lg">Prueba nuestro evaluador</a>';
                } else {
                    echo '<h1 class="display-4 cambio-color">Health Future</h1>';
                    echo '<p class="lead">Descubre cómo tus elecciones de hoy pueden influir en tu bienestar futuro.</p>';
                    echo '<a href="/capston/plantillas/registro/registro.php" class="btn btn-primary btn-lg">Regístrate Ahora</a>';
                }
                ?>
            </div>
        </header>
        <section class="quienes-somos">
            <div class="container">
                <h1>Quiénes Somos</h1>
                <p>
                    Somos Health Future, una plataforma dedicada a mejorar la salud y el bienestar de las personas mediante la aplicación de análisis de datos avanzados y visualización interactiva. Nuestra misión es proporcionar a los usuarios una evaluación personalizada de su salud actual y futura, inspirándolos a tomar decisiones informadas para un estilo de vida más saludable.
                </p>
                <p>
                    En Health Future, utilizamos algoritmos de análisis de datos y modelos predictivos para ofrecer una representación visual única de cómo tus elecciones de salud pueden influir en tu vida a largo plazo. Nuestra plataforma te brinda la oportunidad de explorar diferentes escenarios, establecer metas de salud personalizadas y recibir recomendaciones específicas para tu bienestar.
                </p>
                <p>
                    Nuestro equipo está compuesto por expertos en desarrollo de software, análisis de datos y diseño de experiencia de usuario. Trabajamos incansablemente para brindarte una herramienta poderosa y fácil de usar que te ayude a cuidar tu salud de manera efectiva y motivadora.
                </p>
                        </div>
            </div>
        </div>
        <!-- Carrusel de imágenes -->
        <div id="carouselEjemplo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.vecteezy.com/system/resources/previews/018/741/048/non_2x/digital-medical-health-futuristic-and-global-metaverse-technology-doctor-wearing-best-vr-headset-equipment-to-check-internal-organs-patient-on-screen-future-innovation-concept-photo.jpg" class="d-block w-50" alt="Doctor Cartoon">
                </div>
                <div class="carousel-item">
                    <img src="https://consultorsalud.com/wp-content/uploads/2021/05/Los-Medicos-y-la-Inteligencia-Artificial-en-Salud-.jpg" class="d-block w-50" alt="Médicos e Inteligencia Artificial">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselEjemplo" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselEjemplo" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
        </div>
        <!-- Fin del carrusel de imágenes -->
        <section class="py-5" id="demo">
            <div class="container">
                <h2 class="text-center">Visualización Interactiva</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Imagina un futuro más saludable con nuestro simulador interactivo.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="Demostración de visualización interactiva" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
</html>
