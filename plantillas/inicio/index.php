<?php include 'header.php'; ?>

<header class="text-center py-5">
    <div class="container">
        <h1 class="display-4 cambio-color">Health Future</h1>
        <p class="lead">Descubre cómo tus elecciones de hoy pueden influir en tu bienestar futuro.</p>
        <a href="/capston/plantillas/registro/registro.php" class="btn btn-primary btn-lg">Regístrate Ahora</a>
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
</section>

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="capston/img/prevención.jpg" class="d-block w-100" alt="imagen1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="capston/img/salud.jpg" class="d-block w-100" alt="imagen2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Hola.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section>
    <section class="py-5" id="demo">
        <div class="container">
            <h2 class="text-center">Visualización Interactiva</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>Imagina un futuro más saludable con nuestro simulador interactivo. Cambia tus hábitos y ve cómo impacta en tu bienestar.</p>
                </div>
                <div class="col-md-6">
                    <img src="" alt="Demostración de visualización interactiva" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</section>

<?php include 'footer.php'; ?>
