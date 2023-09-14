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
