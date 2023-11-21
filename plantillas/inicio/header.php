<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluador de Salud Personalizado</title>
    <link rel="stylesheet" type="text/css" href="/capston/assets/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI... crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar-top {
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.8em;
            font-weight: bold;
            color: #343a40;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            font-size: 1.1em;
            color: #343a40;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .navbar-top .navbar-nav .nav-link:hover {
            color: #28a745;
            text-decoration: none;
            background-color: rgba(40, 167, 69, 0.1);
            border-radius: 5px;
            padding: 5px 10px;
        }

        .navbar-toggler {
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
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
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/capston/plantillas/inicio/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capston/plantillas/inicio/caracteristicas.php">Características</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capston/plantillas/evaluador_de_salud/evaluador_home.php">Escoge tu área</a>
                </li>
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

