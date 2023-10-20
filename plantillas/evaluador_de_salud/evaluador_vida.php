<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hábitos de Vida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
        }

        .question {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hábitos de Vida</h1>
    </header>

    <div class="container">
        <div class="question">
            <h2>Nivel de Actividad Física Actual</h2>
            <label for="activity-level">Selecciona tu nivel de actividad:</label>
            <select id="activity-level">
                <option value="sedentary">Sedentario</option>
                <option value="lightly-active">Poco Activo</option>
                <option value="moderately-active">Moderadamente Activo</option>
                <option value="very-active">Muy Activo</option>
            </select>
        </div>

        <div class="question">
            <h2>Consumo de Tabaco</h2>
            <label for="smoking-habit">¿Fumas tabaco?</label>
            <select id="smoking-habit">
                <option value="regularly">Regularmente</option>
                <option value="occasionally">Ocasionalmente</option>
                <option value="never">Nunca</option>
            </select>
        </div>

        <div class="question">
            <h2>Consumo de Alcohol</h2>
            <label for="alcohol-habit">¿Consumes alcohol?</label>
            <select id="alcohol-habit">
                <option value="regularly">Regularmente</option>
                <option value="occasionally">Ocasionalmente</option>
                <option value="never">Nunca</option>
            </select>
        </div>

        <div class="question">
            <h2>Hábitos Alimenticios</h2>
            <label for="eating-habits">Selecciona tus hábitos alimenticios:</label>
            <select id="eating-habits">
                <option value="balanced-diet">Dieta Balanceada</option>
                <option value="vegetarian">Vegetariano</option>
                <option value="vegan">Vegano</option>
                <option value="low-carb">Baja en Carbohidratos</option>
                <option value="other">Otro (Especificar en comentarios)</option>
            </select>
        </div>

        <a href="#" class="btn">Guardar</a>
    </div>
</body>
</html>
