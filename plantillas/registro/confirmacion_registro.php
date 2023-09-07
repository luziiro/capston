<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">¡Registro Exitoso!</h1>
            <p class="lead">Tu cuenta ha sido creada con éxito.</p>
            <hr class="my-4">
            <p>Puedes iniciar sesión ahora.</p>
        </div>
    </div>

    <script>
        // Redirigir a login.php después de 5 segundos
        setTimeout(function () {
            window.location.href = "login.php";
        }, 5000); // 5000 milisegundos = 5 segundos
    </script>
</body>
</html>
