<?php
// Verificar si se envió el formulario de inicio de sesión
// if (isset($_POST['ingreso'])) {
    // Conexión a la base de datos (asumiendo que tienes una conexión establecida)
    

    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $section_login= true;

    include("database.php");
    $conex = mysqli_connect('localhost','root','1234567890', 'bd_empleado',3306);
    // Consulta SQL para verificar las credenciales del usuario
    $query = "SELECT * FROM registro WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conex, $query);

    try{
if (mysql_result( $resultado,0) ) 
{
    $result =mysql_result( $resultado,0);
    echo"Usuario validado correctamente"
}else{
    echo"usuario o password erroneos"
}
}catch(Exception $e)
mysql_close( $conex );


    // // Verificar si se encontró un usuario con las credenciales proporcionadas
    // if (mysqli_num_rows($resultado) == 1) {
    //     // Iniciar sesión
    //     session_start();
    //     $_SESSION['usuario'] = $usuario;

    //     // Redireccionar al usuario a otra página
    //     header("Location: perfil.php");
    //     exit; // Asegurar que el script se detenga después de la redirección
    // } else {
    //     // Mostrar un mensaje de error si las credenciales son incorrectas
    //     echo "Usuario o contraseña incorrectos.";
    // }
// }
?>
<!-- <!DOCTYPE html>
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
</html> -->