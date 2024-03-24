<?php
include "database.php";
$id_usuario = $_GET["id_usuario"];
$sql=$conex->query("select * from perfil where perfil=$id_usuario")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script>


</head>

<body>
    <div>
        <img src="img/logo2.jpg" class="img-thumbnail rounded-circle mx-auto d-block" width="250" alt="logo">
        <h1 class="col-12 col-md-12 text-center d-none d-md-block mr-auto m-auto">Ordenadores HOP </h1>

    </div>

</head>
<body>
<form class="col-4 p-10 m-auto" method="POST">
            <h2 class="text-center text-secondary">Modificar perfil de usuario</h2>
            <?php
        
        while ($datos = $sql->fetch_object()) {

             <div class="mb-3">
                <label for="nombres" class="form-label">Nombres y Apellidos</label>
                <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp" values="<?= $datos->nombres?>">
            </div>
            <div class="mb-3">
                <label for="identificacion" class="form-label">Cedula</label>
                <input type="text" class="form-control" name="identificacion" aria-describedby="emailHelp"values="<?= $datos->identificacion?>">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp"values="<?= $datos->telefono?>">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="address" aria-describedby="emailHelp"values="<?= $datos->address?>">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" aria-describedby="emailHelp"values="<?= $datos->edad?>">
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Fecha de Nacimiento </label>
                <input type="date" class="form-control" name="fecha" aria-describedby="emailHelp"values="<?= $datos->fecha?>">
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" aria-describedby="emailHelp"values="<?= $datos->cargo?>">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado civil</label>
                <input type="text" class="form-control" name="estado" aria-describedby="emailHelp"values="<?= $datos->estado?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="correo" aria-describedby="emailHelp"values="<?= $datos->correo?>">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" name="sexo" aria-describedby="emailHelp"values="<?= $datos->sexo?>">
            </div> 
        }

            

            <button type="submit" class="btn btn-primary" name="btnmodificar" value="OK">REGISTRAR</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>     
</body>
</html>