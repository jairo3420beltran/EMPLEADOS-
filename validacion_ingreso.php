<?php
include ("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT * FROM registro WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

    $resultado = mysqli_query($conex, $query);
    
    if (mysqli_num_rows($resultado) > 0) {
        header('Location: perfil.php');
    } else {
        header('Location: index.php?error=true');
    }
}
?>