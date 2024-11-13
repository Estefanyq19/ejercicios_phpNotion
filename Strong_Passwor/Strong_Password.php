<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Contraseña Fuerte</title>
    <p>eje: Ab1#Cdef</p>
</head>
<body>
    <h1>Verificador de Contraseña Fuerte</h1>
    
    <form method="post" action="">
        <label for="password">Introduce una contraseña:</label>
        <input type="password" name="password" id="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $n = strlen($password);

        // Función numero de caracteres faltantes
        function minimumNumber($n, $password) {
            $numbers = "0123456789";
            $lower_case = "abcdefghijklmnopqrstuvwxyz";
            $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $special_characters = "!@#$%^&*()-+";
            
            $has_digit = false;
            $has_lower = false;
            $has_upper = false;
            $has_special = false;
            
            
            for ($i = 0; $i < $n; $i++) {
                if (strpos($numbers, $password[$i]) !== false) {
                    $has_digit = true;
                }
                if (strpos($lower_case, $password[$i]) !== false) {
                    $has_lower = true;
                }
                if (strpos($upper_case, $password[$i]) !== false) {
                    $has_upper = true;
                }
                if (strpos($special_characters, $password[$i]) !== false) {
                    $has_special = true;
                }
            }
            
          
            $missing_types = 0;
            if (!$has_digit) {
                $missing_types++;
            }
            if (!$has_lower) {
                $missing_types++;
            }
            if (!$has_upper) {
                $missing_types++;
            }
            if (!$has_special) {
                $missing_types++;
            }
            
            $required_length = max(0, 6 - $n);
            return max($missing_types, $required_length);
        }

        $resultado = minimumNumber($n, $password);

        if ($resultado > 0) {
            echo "<p>Para que la contraseña sea fuerte, debes agregar <strong>$resultado</strong> caracteres.</p>";
        } else {
            echo "<p>¡La contraseña es fuerte!</p>";
        }
    }
    ?>
</body>
</html>
