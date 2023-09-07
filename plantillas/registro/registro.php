<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/capston/assets/estilo.css">
</head>
<body class="background-difuminado">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="section-heading text-center mb-4">Registro de Usuario</h1>
                        <form id="registro-form" action="procesar_registro.php" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" id="apellido" name="apellido" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select id="sexo" name="sexo" class="form-control" required>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registro-form").addEventListener("submit", function(event) {
            var nombre = document.getElementById("nombre").value;
            var apellido = document.getElementById("apellido").value;
            var email = document.getElementById("email").value;
            var contrasena = document.getElementById("contrasena").value;
            var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
            var sexo = document.getElementById("sexo").value;

            if (nombre.trim() === "" || apellido.trim() === "" || email.trim() === "" || contrasena.trim() === "" || fecha_nacimiento.trim() === "" || sexo.trim() === "") {
                event.preventDefault();
                alert("Por favor, completa todos los campos.");
            }
        });
    </script>
</body>
</html>
