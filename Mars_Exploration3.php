<?php
function marsExploration($s) {
    $expected = str_repeat("SOS", strlen($s) / 3);
    $differences = 0;

    // Compara los caracteres recibidos con la señal esperada
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $expected[$i]) {
            $differences++;
        }
    }

    // Devuelve el total de diferencias
    return $differences;
}

// Entradas de muestra
$inputs = ["SOSSPSSQSSOR", "SOSSOT", "SOSSOSSOS"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Mars Exploration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 24px;
            color: #4CAF50;
            margin: 10px 0;
        }
        .result p {
            font-size: 20px;
            color: #333;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados de Mars Exploration</h1>

        <?php
        // Recorre cada entrada de muestra y muestra el resultado de las diferencias
        foreach ($inputs as $input) {
            echo "<div class='result'>";
            echo "<p><strong>Entrada:</strong> $input</p>";
            echo "<p><strong>Diferencias encontradas:</strong> " . marsExploration($input) . "</p>";
            echo "</div>";
        }
        ?>

    </div>
</body>
</html>
