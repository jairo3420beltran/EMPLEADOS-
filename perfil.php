<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <div>
        <img src="img/logo2.jpg" class="img-thumbnail"alt="logo">
    <h1 class="text-center p-3">Ordenadores HOP </h1>
    
    </div>
    

    <div class="container-fluid row">
        <form class="col-4">
            <h2 class="tex-center text-secondary">Perfil de usuario</h2>
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres y Apellidos</label>
                <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="identificacion" class="form-label">Cedula</label>
                <input type="text" class="form-control" name="identificacion" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Fecha de Nacimiento </label>
                <input type="date" class="form-control" name="fecha" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado civil</label>
                <input type="text" class="form-control" name="estado" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" name="sexo" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">REGISTRAR</button>
        </form>

        <div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>