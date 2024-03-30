<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLICACIONES </title>

    <link rel="stylesheet" href="assets/css/aplicaciones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <form class="formulario" id="formulario" method="POST" action="control_buscar.php">
        <div class="contenedor">
            <img class="logo" src="img/logo2.jpg" alt="logo">
            <h1>Ordenadores HOP</h1>
        </div>
        <h2>Opciones</h1>

            <div>
                <a class="ancla" href="perfil.php">REGISTRAR</a>

                <a class="ancla" href="perfil.php">EDITAR</a>

                <a class="ancla" href="perfil.php">ELIMINAR</a>

                <button class="boton" type="submit">BUSCAR</button>

                <input type="text" class="form-control" name="identificacion"
                    style="background: #f6f5f7; font-weight: bold; padding: 4px; border-left:4px solid #0c92ac; border-top-left-radius:13px; border-bottom-left-radius:10px;">
            </div>


    </form>

</body>

</html>