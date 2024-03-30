<?php
include ('database.php');

if (
  !empty ($_POST["identificacion"])
) {
    $identificacion = $_POST["identificacion"];


    $query = "SELECT * FROM perfil WHERE Cedula = '$identificacion'";

    $result = mysqli_query($conex, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: modificar_registro.php?cedula=$identificacion");
    } else {
        header("Location: aplicaciones.php");
    }
} else {
    header("Location: aplicaciones.php");
}
?>