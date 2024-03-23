<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="col-4" method="POST">
            <h2 class="text-center text-secondary">Modificar perfil de usuario</h2>

               


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
                <label for="direccion" class="form-label">Direccion</label>
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

</body>
</html>