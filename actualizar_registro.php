<?php
include ('database.php');
    $id=$_POST['id'];

   if (!empty($_POST["nombres"])and !empty($_POST["identificacion"]) and !empty($_POST["telefono"]) and
   !empty($_POST["address"]) and !empty($_POST["edad"]) and !empty($_POST["fecha"]) and !empty($_POST["cargo"]) and
   !empty($_POST["estado"] ) and !empty($_POST["correo"] ) and !empty($_POST["sexo"]) and !empty($_POST['id']))
   {
    $nombres=$_POST["nombres"];
    $identificacion=$_POST["identificacion"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["address"];
    $edad=$_POST["edad"];
    $fechaNacimiento=$_POST["fecha"];
    $cargo=$_POST["cargo"];
    $estado=$_POST["estado"];
    $correo=$_POST["correo"];
    $sexo=$_POST["sexo"];

    if(isset($_FILES["imagen"])){
        $foto=$_FILES["imagen"]['tmp_name'];
        $img = file_get_contents($foto); 
        $data = base64_encode($img); 
    }

    $sql="UPDATE perfil SET nombres='$nombres',Cedula='$identificacion', Telefono='$telefono', Direccion='$direccion', Edad='$edad', F_Nacimiento='$fechaNacimiento',
     Cargo='$cargo', Estado_Civil='$estado', Correo='$correo', Sexo='$sexo') WHERE id_usuario='$id'";

    $result = $conex->query($sql);

    if($result){
        header('Location: perfil.php');
    }else{
        header("Location: modificar_registro.php?id_usuario=$id");
    }
   }else{
    header("Location: modificar_registro.php=id_usuario=$id");
}
?>