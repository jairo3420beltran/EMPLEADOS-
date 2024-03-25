<?php
include "database.php";
$id_usuario = $_GET["id_usuario"];
$sql=$conex->query("select * from perfil where id_usuario=$id_usuario")
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
<form class="col-4 p-10 m-auto" method="POST" action="actualizar_registro.php"  enctype="multipart/form-data">
            <h2 class="text-center text-secondary">Modificar perfil de usuario</h2>
            <input type="hidden" name="id_usuario" value="<?= $_GET["id_usuario"]?>"
            <?php
<<<<<<< HEAD
        include "modificar.php";
=======
>>>>>>> 633aa736b3da35983587f06a9cc5de8efddeced3
        while ($datos = $sql->fetch_object()) {
            if (isset($_GET['id_usuario'])) {
                
                $id=$_GET['id_usuario'];
                echo "
            <div style='display:none;'>
            <input type='text' class='form-control' name='id' aria-describedby='emailHelp' value='$id'>
        </div>
             <div class='mb-3'>
                <label for='nombres' class='form-label'>Nombres y Apellidos</label>
                <input type='text' class='form-control' name='nombres' aria-describedby='emailHelp' value='$datos->nombres'>
            </div>
            <div class='mb-3'>
                <label for='identificacion' class='form-label'>Cedula</label>
                <input type='number' class='form-control' name='identificacion' aria-describedby='emailHelp'value='$datos->Cedula'>
            </div>
            <div class='mb-3'>
                <label for='telefono' class='form-label'>Teléfono</label>
                <input type='number' class='form-control' name='telefono' aria-describedby='emailHelp'value='$datos->Telefono'>
            </div>
            <div class='mb-3'>
                <label for='direccion' class='form-label'>Direccion</label>
                <input type='text' class='form-control' name='address' aria-describedby='emailHelp'value='$datos->Direccion' />
            </div>
            <div class='mb-3'>
                <label for='edad' class='form-label'>Edad</label>
                <input type='number' class='form-control' name='edad' aria-describedby='emailHelp'value='$datos->Edad' />
            </div>
            <div class='mb-3'>
                <label for='nombres' class='form-label'>Fecha de Nacimiento </label>
                <input type='date' class='form-control' name='fecha' aria-describedby='emailHelp'value='$datos->F_Nacimiento'/>
            </div>
            <div class='mb-3'>
                <label for='cargo' class='form-label'>Cargo</label>
                <input type='text' class='form-control' name='cargo' aria-describedby='emailHelp'value='$datos->Cargo'/>
            </div>
            <div class='mb-3'>
                <label for='estado' class='form-label'>Estado civil</label>
                <input type='text' class='form-control' name='estado' aria-describedby='emailHelp'value='$datos->Estado_Civil'/>
            </div>
            <div class='mb-3'>
            <label for='email' class='form-label'>Email</label>
            <input type='email' class='form-control' name='correo' aria-describedby='emailHelp'value='$datos->Correo'/>
            </div>
            <div class='mb-3'>
            <label for='sexo' class='form-label'>Sexo</label>
            <input type='text' class='form-control' name='sexo' aria-describedby='emailHelp'value='$datos->Sexo'/>
            </div> 
            <div class='mb-3'>
            <img src='data:image/png;base64,$datos->foto'/>
            <input type='file' class='form-control' id='img' name='imagen' aria-describedby='emailHelp' accept='image/*' />
            </div> 
            ";
        }
        else {
            header('Location: perfil.php');
    
        }
    }
        ?>
            <button type="submit" class="btn btn-primary" name="btnmodificar" value="OK">MODIFICAR</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>     
</body>
</html>