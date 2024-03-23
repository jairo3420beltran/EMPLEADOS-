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



  
  
  
  $contrasena = $_POST['contrasena'];
  
  // Validaciones
  $longitud_minima = 8;
  $requiere_mayusculas = true;
  $requiere_minusculas = true;
  $requiere_numeros = true;
  $requiere_caracteres_especiales = true;
  
  $errores = [];
  
  // Verificar longitud mínima
  if (strlen($contrasena) < $longitud_minima) {
      $errores[] = "La contraseña debe tener al menos {$longitud_minima} caracteres.";
  }
  
  // Verificar si se requieren mayúsculas
  if ($requiere_mayusculas && !preg_match('/[A-Z]/', $contrasena)) {
      $errores[] = "La contraseña debe contener al menos una letra mayúscula.";
  }
  
  // Verificar si se requieren minúsculas
  if ($requiere_minusculas && !preg_match('/[a-z]/', $contrasena)) {
      $errores[] = "La contraseña debe contener al menos una letra minúscula.";
  }
  
  // Verificar si se requieren números
  if ($requiere_numeros && !preg_match('/[0-9]/', $contrasena)) {
      $errores[] = "La contraseña debe contener al menos un número.";
  }
  
  // Verificar si se requieren caracteres especiales
  if ($requiere_caracteres_especiales && !preg_match('/[^a-zA-Z0-9]/', $contrasena)) {
      $errores[] = "La contraseña debe contener al menos un carácter especial.";
  }
  
  // Mostrar errores si los hay
  if (!empty($errores)) {
      foreach ($errores as $error) {
          echo $error . "<br>";
      }
  } else {
      // La contraseña es válida
      echo "La contraseña es válida.";
  }
  
  

}
?>