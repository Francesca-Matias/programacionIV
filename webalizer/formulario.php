<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleForm.css">
    <title>Formulario php_check_syntax</title>
</head>
<body>
    <div class="login">
        <h2>Iniciar Sesión</h2>
        <form id="loginForm">
            <div class="form">
                <label class="username" >Usuario:</label>
                <input type="text" name="username" id="username" placeholder="Nombre de usuario" required>
            </div>
            <div class="form">
                <label class="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera los datos del formulario
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        if ($username === "usuario" && $password === "contraseña") {
            echo "<p>Inicio de sesión exitoso. ¡Bienvenido!</p>";
        } else {
            echo "<p>Error: Credenciales incorrectas. Inténtalo de nuevo.</p>";
        }
    }
    ?>
    <script src="formulario.js"></script>
</body>
</html>




