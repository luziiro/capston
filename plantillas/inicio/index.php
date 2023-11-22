<?php
include 'header.php';
?>

    <br><br>

    <div class="container mb-4">
        <div class="row">
            <div style="text-align: center;" class="col-md-6">
                <img data-aos="fade-right" data-aos-delay="300" style="max-width: 70%;" src="../../img/health-future.png" alt="Descripción de la imagen" class="img-future">
            </div>
            <div style="position: relative; top: 60px;" class="col-md-6">
                <h1 class="h1-home">Health Future: Tu Compañero en el Camino hacia el Bienestar Integral</h1>
                <p class="p-home">Bienvenido a nuestro Evaluador de Salud, 
                tu compañero personal en el viaje hacia un bienestar integral. 
                Con solo unos clics, podrás obtener una visión clara de tu estado de salud actual y recibir recomendaciones 
                personalizadas para mejorar tu calidad de vida.</p>
                <a href="/capston/plantillas/registro/registro.php" class="btn-eva">Regístrate Ahora</a>
            </div>
        </div>
    </div>

    <style>
    .img-ancha {
        position: relative;
        width: 100%; /* Ancho completo de la pantalla */
        height: 70vh; /* Altura al 70% de la altura de la ventana */
    }

    .img-ancha img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Esto asegura que la imagen cubra completamente el contenedor */
        object-position: center; /* Centra la imagen dentro del contenedor */
        display: block;
    }

    .texto-sobre-imagen {
        position: absolute;
        top: 25%;
        left: 20%;
        transform: translate(-50%, -50%);
        color: black;
        text-align: left;
    }

    .texto-sobre-imagen > h1 {
        font-size: 40px;
        font-weight: 700;
    }

    .texto-sobre-imagen > h4 {
        font-size: 32px;
    }
</style>

<div class="img-ancha mb-4">
    <img src="../../img/salud-home.jpg" alt="Descripción alternativa de la imagen">
    <div class="texto-sobre-imagen">
        <h1 class="mb-4">Bienestar Integral</h1>
        <h4>Conexión para tu presente.</h4>   
        <h4>Innovación para tu bienestar futuro.    </h4>      
    </div>
</div>

    <div class="content">
        <div class="container">
            <h3 style="font-weight: 700;">En el dinámico entorno de la salud actual, el panorama del bienestar evoluciona más rápido que nunca.</h3>
            <p>
                ¿Cuentas con la tecnología adecuada para adaptarte y mantenerte a la vanguardia?
            </p>
            <p>
                Health Future ofrece soluciones integrales y avanzadas en tecnología de salud, abarcando desde la evaluación inicial del bienestar hasta el seguimiento a largo plazo. Enfréntate a nuevos desafíos con perspectivas innovadoras, herramientas de gestión de salud de vanguardia y operaciones simplificadas, todo dentro del ecosistema de Health Future.
            </p>
            <p>
                Nos centramos en brindarte soluciones tecnológicas líderes en el sector de la salud, para que tú puedas concentrarte en mejorar y mantener tu bienestar.
            </p>
        </div>
    </div>
<br><br>
    <div class="content">
        <div class="container">
            <h3 style="font-weight: 700;">Quiénes Somos</h3>
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

<?php
include 'footer.php';
?>