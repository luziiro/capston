<?php include '../inicio/header.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                <h1 class="text-center" style="position: relative;top: 8px;">Iniciar Sesión</h1>
                    <div class="card-body">
                        <?php
                        if (isset($_GET["error"]) && $_GET["error"] == "credenciales_invalidas") {
                            echo '<div class="alert alert-danger" role="alert">Credenciales inválidas</div>';
                        }
                        ?>
                        <form action="procesar_login.php" method="post">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                            </div>
                            <center class="mt-4"><button type="submit" class="btn-eva">Iniciar Sesión</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../inicio/footer.php'; ?>