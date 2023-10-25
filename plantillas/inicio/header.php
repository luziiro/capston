<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluador de Salud Personalizado</title>
    <!-- Agregamos los enlaces a Bootstrap y otros estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI... crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/capston/assets/estilo.css?ver=2">
    <!-- Agregamos un enlace a tu archivo de estilo personalizado (si lo tienes) -->
    <link rel="stylesheet" type="text/css" href="estilo-fondo.css">
    <link rel="stylesheet" type="text/css" href="estilo.css"> <!-- Enlace a tu archivo CSS personalizado -->
    <style>
        /* Estilos personalizados */
        .navbar {
            background-color: transparent; /* Fondo transparente para que la imagen de fondo sea visible */
        }

        .navbar-brand {
            color: #fff; /* Cambia el color del texto del logo a tu preferencia */
        }

        .navbar-toggler-icon {
            background-color: #fff; /* Cambia el color del ícono del botón del menú a tu preferencia */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Cambia el color del texto de las opciones del menú a tu preferencia */
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00; /* Cambia el color al pasar el mouse sobre las opciones del menú a tu preferencia */
        }

        /* Personaliza el fondo del encabezado superior */
        .navbar-top {
            background-color: #3498db; /* Cambia el color de fondo a tu preferencia */
        }

        .navbar-top .navbar-nav .nav-link {
            color: #fff; /* Cambia el color del texto de las opciones a tu preferencia */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-top">
    <div class="container">
        <a class="navbar-brand" href="/capston/plantillas/inicio/index.php">Health Future</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/capston/plantillas/inicio/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capston/plantillas/inicio/caracteristicas.php">Características</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capston/plantillas/evaluador_de_salud/evaluador.php">Evaluador(test)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capston/plantillas/evaluador_de_salud/evaluador_home.php">Escoge tu área</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                        session_start();
                        if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario_logueado']) {
                            echo $_SESSION["nombre_usuario"];
                        } else {
                            echo 'Usuario';
                        }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario_logueado']) {
                            echo '<li><a class="dropdown-item" href="/capston/plantillas/login/procesar_logout.php">Cerrar sesión</a></li>';
                        } else {
                            echo '<li><a class="dropdown-item" href="/capston/plantillas/login/login.php">Ingresa</a></li>';
                            echo '<li><a class="dropdown-item" href="/capston/plantillas/registro/registro.php">Registro</a></li>';
                        }
                        ?>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Resto del contenido de tu página -->
</body>
</html>
