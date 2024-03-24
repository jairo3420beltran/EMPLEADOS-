<?php
include("database.php");

if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombres"])and !empty($_POST["identificacion"]) and !empty($_POST["telefono"]) and
!empty($_POST["address"]) and !empty($_POST["edad"]) and !empty($_POST["fecha"]) and !empty($_POST["cargo"]) and
!empty($_POST["estado"] ) and !empty($_POST["correo"] ) and !empty($_POST["sexo"]) and  $_FILES["imagen"]["size"] < 3000000)
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

    $foto=$_FILES["imagen"]['tmp_name'];
    $img = file_get_contents($foto); 
    $data = base64_encode($img); 

    $sql="insert into perfil (nombres,Cedula, Telefono, Direccion, Edad, F_Nacimiento, Cargo, Estado_Civil, Correo, Sexo, foto) 
    values('$nombres','$identificacion','$telefono', '$direccion', '$edad', '$fechaNacimiento', '$cargo',
    '$estado', '$correo', '$sexo', '$data')";

    $result = $conex->query($sql);

    if($result){
        echo '<div class="alert alert-success">Persona registrada correctamente</div> ';
    }else{
        echo '<div class="alert alert-danger">Error al registrar</div> ';
    }

}else{
    echo '<div class="alert alert-warning">Alguno de los campos está vacio </div> ';
}



}
?>