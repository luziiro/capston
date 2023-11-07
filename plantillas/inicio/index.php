<?php
include 'header.php';
?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="../../img/medicina.png" alt="Descripción de la imagen" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>Bienvenido a nuestro Evaluador de Salud, 
                tu compañero personal en el viaje hacia un bienestar integral. 
                Con solo unos clics, podrás obtener una visión clara de tu estado de salud actual y recibir recomendaciones 
                personalizadas para mejorar tu calidad de vida.</p>
            </div>
        </div>
    </div>


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

<?php
include 'footer.php';
?>