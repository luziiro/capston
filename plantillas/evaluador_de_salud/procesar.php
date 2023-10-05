<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario y realiza cálculos de salud aquí

    // Por ejemplo, calculamos el IMC
    $altura = floatval($_POST["altura"]);
    $peso = floatval($_POST["peso"]);
    $imc = $peso / ($altura * $altura);

    // Mostrar el resultado del IMC
    echo "<h2>Resultados</h2>";
    echo "<p>Tu IMC es: " . $imc . "</p>";

    // Mostrar recomendaciones de salud basadas en el IMC
    echo "<h2>Recomendaciones de salud basadas en el IMC</h2>";
    if ($imc < 18.5) {
        echo "<p>Tu IMC indica que estás dentro del rango de peso insuficiente. Considera hablar con un profesional de salud para obtener recomendaciones adecuadas.</p>";
        echo "<p>Recuerda que es importante aumentar tu ingesta calórica y nutricional para lograr un peso saludable. Consulta a un dietista o médico para obtener orientación personalizada.</p>";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "<p>Tu IMC indica que estás dentro del rango de peso normal o saludable. ¡Sigue manteniendo tus hábitos de salud!</p>";
        echo "<p>Para mantener un peso saludable, es fundamental seguir una dieta equilibrada y hacer ejercicio regularmente. También es importante priorizar el bienestar mental y emocional.</p>";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "<p>Tu IMC indica que estás dentro del rango de sobrepeso. Considera hacer más ejercicio y revisar tu dieta.</p>";
        echo "<p>Para bajar de peso, es recomendable reducir la ingesta calórica, optar por alimentos nutritivos y mantener una rutina de ejercicios regular. Consulta a un profesional de salud para un plan personalizado.</p>";
    } else {
        echo "<p>Tu IMC indica que estás dentro del rango de obesidad. Es importante tomar medidas para mejorar tu salud, como una dieta equilibrada y ejercicio regular.</p>";
        echo "<p>Para reducir la obesidad, es fundamental hacer cambios en la dieta y aumentar la actividad física. Considera trabajar con un equipo médico y de salud para abordar este desafío de manera efectiva.</p>";
    }

    // Aquí puedes agregar más recomendaciones de salud basadas en otros datos ingresados por el usuario (colesterol, presión arterial, etc.).

    // También puedes generar visualizaciones adicionales según los datos recopilados.


    
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $edad = $_POST["edad"];
    $horas_sueno = $_POST["horas_sueno"];
    $ejercicio_semanal = $_POST["ejercicio_semanal"];
    $consume_frutas_verduras = $_POST["consume_frutas_verduras"];
    $colesterol = $_POST["colesterol"];
    $presion_arterial = $_POST["presion_arterial"];

    // Nombre de los títulos de las columnas
    $titulos = ["Altura (m)", "Peso (kg)", "Edad", "Horas de sueño", "Ejercicio semanal", "Frutas y verduras", "Colesterol (mg/dL)", "Presión arterial (mm Hg)"];

    // Abre o crea el archivo CSV en modo escritura
    $archivo_csv = fopen('datos.csv', 'a');

    // Si el archivo está vacío, escribe los títulos
    if (filesize('datos.csv') === 0) {
        fputcsv($archivo_csv, $titulos);
    }

    // Escribe los datos en el archivo CSV
    fputcsv($archivo_csv, [$altura, $peso, $edad, $horas_sueno, $ejercicio_semanal, $consume_frutas_verduras, $colesterol, $presion_arterial]);

    // Cierra el archivo CSV
    fclose($archivo_csv);

    echo "Datos guardados en datos.csv correctamente.";
} else {
    echo "Acceso denegado.";
}

// codigo para guardar los datos en la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $edad = $_POST["edad"];
    $horas_sueno = $_POST["horas_sueno"];
    $ejercicio_semanal = $_POST["ejercicio_semanal"];
    $consume_frutas_verduras = $_POST["consume_frutas_verduras"];
    $colesterol = $_POST["colesterol"];
    $presion_arterial = $_POST["presion_arterial"];

    // Configura la conexión a la base de datos usando phpMyAdmin
    $servername = "localhost"; // Cambia esto si tu servidor MySQL tiene un nombre diferente
    $username = "root"; // Cambia esto por tu nombre de usuario de MySQL
    $password = ""; // Cambia esto por tu contraseña de MySQL
    $dbname = "evaluador_salud"; // Cambia esto por el nombre de tu base de datos

    // Crea una conexión a la base de datos
    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO datos_usuario (altura, peso, edad, horas_sueno, ejercicio_semanal, consume_frutas_verduras, colesterol, presion_arterial) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara la sentencia SQL
    $stmt = $conexion->prepare($sql);

    // Vincula los parámetros
    $stmt->bind_param("ddiiisii", $altura, $peso, $edad, $horas_sueno, $ejercicio_semanal, $consume_frutas_verduras, $colesterol, $presion_arterial);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        echo "Datos guardados en la base de datos correctamente.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $stmt->error;
    }

    // Cierra la conexión y la sentencia
    $stmt->close();
    $conexion->close();
} else {
    echo "Acceso denegado.";
}
?>
