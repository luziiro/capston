<?php include '../inicio/header.php';?>
    <h1>Historial de Usuarios de Salud</h1>
    <table class="table table-bordered" border="1">
        <tr>
            <th>Peso</th>
            <th>Altura</th>
            <th>Condiciones</th>
            <th>Medicaciones</th>
            <th>Estilo de Vida</th>
            <th>Objetivos</th>
            <th>Historial Familiar</th>
            <th>Hábitos Alimenticios</th>
            <th>Consumo Alcohol</th>
            <th>Consumo Tabaco</th>
            <th>Calidad Sueño</th>
            <th>Presión Arterial</th>
            <th>Frecuencia Cardíaca</th>
            <th>Respuesta API</th>
        </tr>
        <?php
        // Asegúrate de que el usuario está logueado
        if (!isset($_SESSION['user_id'])) {
            // Redirigir al usuario a la página de login si no está logueado
            header('Location: login.php');
            exit;
        }

        // Datos de conexión a la base de datos
        $host = "localhost";
        $dbUsername = "root"; // Cambia esto por tu nombre de usuario de MySQL
        $dbPassword = ""; // Cambia esto por tu contraseña de MySQL
        $dbname = "evaluador_salud"; // Cambia esto por el nombre de tu base de datos

        // Crear conexión
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Consulta SQL
        $sql = "SELECT * FROM usuarios_salud ORDER BY fecha_registro DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Salida de datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["peso"]. "</td>";
                echo "<td>" . $row["altura"]. "</td>";
                echo "<td>" . $row["condiciones"]. "</td>";
                echo "<td>" . $row["medicaciones"]. "</td>";
                echo "<td>" . $row["estilo_vida"]. "</td>";
                echo "<td>" . $row["objetivos"]. "</td>";
                echo "<td>" . $row["historial_familiar"]. "</td>";
                echo "<td>" . $row["habitos_alimenticios"]. "</td>";
                echo "<td>" . $row["consumo_alcohol"]. "</td>";
                echo "<td>" . $row["consumo_tabaco"]. "</td>";
                echo "<td>" . $row["calidad_sueno"]. "</td>";
                echo "<td>" . $row["presion_arterial"]. "</td>";
                echo "<td>" . $row["frecuencia_cardiaca"]. "</td>";
                echo "<td>" . $row["respuesta_api"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 resultados";
        }
        $conn->close();
        ?>
    </table>
<?php include '../inicio/footer.php'; ?>