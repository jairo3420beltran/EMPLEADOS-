<?php
include ("database.php");

function response($code = 200, $status = "", $message = "")
{
  http_response_code($code);
  if (!empty ($status) && !empty ($message)) {
    $response = array("status" => $status, "message" => $message);
    echo json_encode($response, JSON_PRETTY_PRINT);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST["usuario"];
  $contraseña = $_POST["contraseña"];
  $confirmacion = $_POST["confirmacion"];


  // Validaciones
  $longitud_minima = 8;

  $error_usuario = "";
  $error_contraseña = "";
  $error_match_contraseña = "";

  // Verificar longitud mínima
  if (strlen($contraseña) < $longitud_minima) {
    $error_contraseña = "La contraseña debe tener al menos {$longitud_minima} caracteres.";
  }

  if (strcmp($contraseña, $confirmacion) != 0) {
    $error_match_contraseña = "La contraseña no es igual";

  }

  if (strlen($usuario) <= 4) {
    $error_usuario = "El usuario debe tener  minimo 4 caracteres";
  }

  if (strlen($error_usuario) == 0 and strlen($error_contraseña) == 0 and strlen($error_match_contraseña) == 0) {
    $consulta = "INSERT INTO registro (usuario,contraseña)
  VALUES ('$usuario','$contraseña')";
    $resultado = mysqli_query($conex, $consulta);


    if ($resultado) {
      header('Location: aplicaciones.php');

    } else {
      header('Location: registro.php?error=true');
    }
  } else {
    header('Location: registro.php?error=true');

  }
} else {
  header('Location: registro.php?error=true');
}
?>