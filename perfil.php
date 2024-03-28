<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="assets/css/perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script>

</head>

<body>
    <script>
        function eliminar(params) {
            var respuesta = confirm("Deseas Eliminar")
            return respuesta
        }
    </script>

    <div class="header">
        <div class="col-5 content">
            <a href="index.php" class="btn-salir">SALIR</a>
            <img src="img/logo2.jpg" class="img-thumbnail rounded-circle mx-auto " width="250 " alt="logo">
        </div>
        <h1 class="">Ordenadores HOP </h1>

    </div>


    <div class="container-fluid row">
        <form class="col-5" method="POST" enctype="multipart/form-data" action="controlPerfil.php">
            <h2 class="text-center text-secondary">Perfil de Usuario</h2>

            <?php
             if (isset ($_GET['error'])) {
                $hasError = $_GET["error"];
                if ($hasError == 'true') {
                    echo '<div class="alert alert-danger">Error al registrar</div> ';
                }
                if ($hasError == 'false') {
                    echo '<div class="alert alert-success">Persona registrada correctamente</div> ';
                }
                if ($hasError == 'campos') {
                    echo '<div class="alert alert-warning">Alguno de los campos está vacio </div> ';

                }
            }
            

            ?>


            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres y Apellidos</label>
                <input type="text" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 3px; border-left:3px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px" name="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="identificacion" class="form-label ">Cedula</label>
                <input type="text" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" name="identificacion" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" name="telefono" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" id="control" name="address" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" aria-describedby="emailHelp" name="edad">
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Fecha de Nacimiento </label>
                <input type="date" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" id="control" name="fecha" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" id="control" name="cargo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado civil</label>
                <input type="text" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" id="control" name="estado" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;" id="control" name="correo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select name="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Binario">Binario</option>
                </select>
            </div>
            <div class="mb-3">

                <input type="file" class="form-control" id="img" name="imagen" aria-describedby="emailHelp"
                    accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">REGISTRAR</button>
            <a href="index.php">SALIR</a>
        </form>

        <div class="col-1 p-2">
            <table class="table table-striped">
                <thead class="bg-info">
                    <tr>

                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">id_usuario</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">nombres</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Cedula</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Telefono</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Direccion</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Edad</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Fecha_Nacimiento</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Cargo</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Estado_Civil</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Correo</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">Sexo</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;">foto</th>
                        <th scope="col" style="background-color: #00e2ff; font-weight: bold;"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include ("database.php");
                    $sql = $conex->query("select * from perfil");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->id_usuario ?></td>
                            <td><?= $datos->nombres ?></td>
                            <td><?= $datos->Cedula ?></td>
                            <td><?= $datos->Telefono ?></td>
                            <td><?= $datos->Direccion ?></td>
                            <td><?= $datos->Edad ?></td>
                            <td><?= $datos->F_Nacimiento ?></td>
                            <td><?= $datos->Cargo ?></td>
                            <td><?= $datos->Estado_Civil ?></td>
                            <td><?= $datos->Correo ?></td>
                            <td><?= $datos->Sexo ?></td>
                            <td><img src='data:image/png;base64,<?= $datos->foto ?>' ,
                                    style="width:150px;height:150px;object-fit: cover; border-radius: 50%;" /></td>
                            <td>
                                <a href="modificar_registro.php?id_usuario=<?= $datos->id_usuario ?>"
                                    class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                                <a onclick="return eliminar()" href="eliminar.php?id_usuario=<?= $datos->id_usuario ?>"
                                    class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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