<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80bb8b53ab.js" crossorigin="anonymous"></script>

</head>

<body>
    <form class="formulario" id="formulario">
        <div class="contenedor">
            <img class="logo" src="img/logo2.jpg" alt="logo">
            <h1>Ordenadores HOP</h1>
        </div>
        <h2>Registro</h1>
            <div class="usuario">
                <label class="label" for="">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese un usuario ">
                <p id="error_usuario"></p>
            </div>
            <div class="usuario">
                <label class="label" for="">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
                <p id="error_password"></p>
            </div>
            <div class="usuario">
                <label class="label" for="">Confirmar_contraseña</label>
                <input type="password" name="confirmacion" id="confirmar" placeholder="Confirrme su contraseña">
                <p id="error_confirmar"></p>
            </div>
            <button class="boton" id="submit" type="button">registrar</button>
            <a href="index.php" id="salir">SALIR</a>
    </form>
    <script defer>
        const boton = document.querySelector("#submit")

        boton.addEventListener('click', async () => {
            const formData = new FormData()
            const user = document.querySelector("#usuario")
            const userError = document.querySelector("#error_usuario")

            const pass = document.querySelector("#contraseña")
            const passError = document.querySelector("#error_password")

            const confirm = document.querySelector("#confirmar")
            const confirmError = document.querySelector("#error_confirmar")

            const salir = document.querySelector("#salir")



            formData.append("usuario", user.value)
            formData.append("contraseña", pass.value)
            formData.append("confirmacion", confirm.value)


            const response = await fetch('/EMPLEADOS-/control.php', {
                body: formData,
                method: 'POST'
            }).then(e => e.json())

            const errores = await JSON.parse(response.message)

                passError.textContent=errores.password ?? ''
                userError.textContent=errores.user ?? ''
                confirmError.textContent=errores.match_password ?? ''

                if(response.status === "good"){
                    salir.classList.add("display")                   
                }
        })

    </script>
</body>

</html>
