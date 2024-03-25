


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <form class="formulario" id="formulario" method="POST" action="control.php">
        <div class="contenedor">
            <img class="logo" src="img/logo2.jpg" alt="logo">
            <h1>Ordenadores HOP</h1>
        </div>
        <h2>Registro</h1>
            <div class="usuario">
                <label class="label" for="">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese un usuario ">
                <?php 
                   if (isset ($_GET['error'])) {
                    $hasError = $_GET["error"];
                    if ($hasError == 'true') {
                        echo "<p class='error'>Usuario incorrecto</p>";

                    }
                }
                    ?>
                <p id="error_usuario"></p>
            </div>
            <div class="usuario">
                <label class="label" for="">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
                <?php 
                   if (isset ($_GET['error'])) {
                    $hasError = $_GET["error"];
                    if ($hasError == 'true') {
                        echo "<p class='error'>Contraseña incorrecto</p>";

                    }
                }
                    ?>
            </div>
            <div class="usuario">
                <label class="label" for="">Confirmar_contraseña</label>
                <input type="password" name="confirmacion" id="confirmar" placeholder="Confirrme su contraseña">
                <?php 
                   if (isset ($_GET['error'])) {
                    $hasError = $_GET["error"];
                    if ($hasError == 'true') {
                        echo "<p class='error'>Contraseña incorrecta</p>";

                    }
                }
                    ?>
            </div>
            <button class="boton" type="submit">registrar</button>
            <a class="btn" href="index.php">Ingresar</a>

    </form>

    </script>
</body>

</html>
