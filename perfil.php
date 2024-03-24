<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script>


</head>

<body>
    <div>
        <img src="img/logo2.jpg" class="img-thumbnail rounded-circle" width="250 " alt="logo">
        <h1 class="col-12 col-md-12 text-center d-none d-md-block mr-auto">Ordenadores HOP </h1>

    </div>


    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h2 class="text-center text-secondary">Perfil de usuario</h2>

                <?php
                    include("controlPerfil.php");
                ?>


            <div class="mb-3">
                <label for="nombres" class="form-label" >Nombres y Apellidos</label>
                <input type="text"  class="form-control" id="control" name="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="identificacion" class="form-label ">Cedula</label>
                <input type="text" class="form-control "id="control" name="identificacion" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control"id="control" name="telefono" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control"id="control" name="address" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="control" name="edad" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Fecha de Nacimiento </label>
                <input type="date" class="form-control" id="control" name="fecha" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="control" name="cargo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado civil</label>
                <input type="text" class="form-control" id="control" name="estado" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="control" name="correo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" id="control" name="sexo" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">REGISTRAR</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        
                        <th scope="col">id_usuario</th>
                        <th scope="col">nombres</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Fecha_Nacimiento</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Estado_Civil</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Sexo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include("database.php");
                    $sql = $conex->query("select * from perfil");
                    while ($datos=$sql->fetch_object()) { ?>
                        
                    <tr>
                        <td><?=$datos->id_usuario?></td>
                        <td><?=$datos->nombres?></td>
                        <td><?=$datos->Cedula?></td>
                        <td><?=$datos->Telefono?></td>
                        <td><?=$datos->Direccion?></td>
                        <td><?=$datos->Edad?></td>
                        <td><?=$datos->F_Nacimiento?></td>
                        <td><?=$datos->Cargo?></td>
                        <td><?=$datos->Estado_Civil?></td>
                        <td><?=$datos->Correo?></td>
                        <td><?=$datos->Sexo?></td>
                        <td>
                            <a href="modificar_registro.php?id_usuario=<?=$datos->id_usuario?>" class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                            <a href="eliminar.php?id_usuario=<?=$datos->id_usuario?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php }
                    ?>



                </tbody>
            </table>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>