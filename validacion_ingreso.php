<?php
// Verificar si se envió el formulario de inicio de sesión
if (isset($_POST['ingreso'])) {
    // Conexión a la base de datos (asumiendo que tienes una conexión establecida)
    include("database.php");

    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para verificar las credenciales del usuario
    $consulta = "SELECT * FROM registro WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conex, $consulta);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($resultado) == 1) {
        // Iniciar sesión
        session_start();
        $_SESSION['usuario'] = $usuario;

        // Redireccionar al usuario a otra página
        header("Location: otra_pagina.php");
        exit; // Asegurar que el script se detenga después de la redirección
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña"><br>
        <input type="submit" name="login" value="Iniciar sesión">
    </form>
</body>
</html>