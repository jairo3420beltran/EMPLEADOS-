<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<form class="formulario" method="post">
        <div class="contenedor">
            <img class="logo" src="img/logo2.jpg" alt="logo">
            <h1>Ordenadores HOP</h1>

        </div>
        <h2>Ingreso</h1>


            <?php

            ?>

            <div class="usuario">
                <label class="label" for="">Usuario</label>
                <input type="tex" name="usuario" placeholder="Ingrese un usuario ">
            </div>
            <div class="usuario">
                <label class="label" for="">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
            </div>
           

            <input class="boton" type="submit" value="INGRESAR" name="ingreso">
            <a class="btn" href="registro.php">REGISTRAR</a>
            
    </form>
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>