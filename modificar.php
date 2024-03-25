<?php

if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["identificacion"]) and !empty($_POST["telefono"]) and !empty($_POST["address"]) and !empty($_POST["edad"]) and !empty($_POST["fecha"]) and !empty($_POST["cargo"]) and !empty($_POST["estado"]) and !empty($_POST["correo"]) and !empty($_POST["sexo"])) {
        $id_usuario=$_POST["id_usuario"];
        $nombres=$_POST["nombres"];
        $Cedula=$_POST["Cedula"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $edad=$_POST["edad"];
        $F_Nacimiento=$_POST["F_Nacimiento"];
        $cargo=$_POST["cargo"];
        $estado=$_POST["estado"];
        $correo=$_POST["correo"];
        $sexo=$_POST["sexo"];
        $sql=$conex->query("update perfil set nombres='$nombres', Cedula='$Cedula', telefono='$telefono', direccion='$direccion', edad='$edad', F_Nacimiento='$F_Nacimiento', cargo='$cargo', estado='$estado', correo='$correo', sexo='$sexo' where id_usuario=id_usuario");
        if ($sql==1) {
            header("Location:index.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR</div>";
        }
        
    } else {
        echo "<div class='alert alert-danger'>CAMPOS VACIOS</div>";
    }
}

?>