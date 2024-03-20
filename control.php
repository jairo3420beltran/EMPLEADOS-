<?php
include ("database.php");



if (isset ($_POST["registro"])) {

  if (
    strlen($_POST["usuario"]) >= 1 &&
    strlen($_POST["contraseña"]) >= 1
    
  ) {
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);
    

    $consulta = "INSERT INTO registro (usuario,contraseña)
     VALUES ('$usuario','$contraseña')";
    $resultado = mysqli_query($conex, $consulta);


    if ($resultado) {
      echo '<div class="alert alert-success">Persona registrada correctamente</div> ';
    } else {
      echo '<div class="alert alert-danger">Error al registrar</div> ';
    }

  } else {
    echo '<div class="alert alert-warning">Alguno de los campos está vacio </div> ';
  }



}
?>