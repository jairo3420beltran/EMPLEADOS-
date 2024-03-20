<?php
include("database.php");

if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombres"])and !empty($_POST["identificacion"]) and !empty($_POST["telefono"]) and
!empty($_POST["address"]) and !empty($_POST["edad"]) and !empty($_POST["fecha"]) and !empty($_POST["cargo"]) and
!empty($_POST["estado"] ) and !empty($_POST["correo"] ) and !empty($_POST["sexo"] ))
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

    // $sql=$conex->query("insert into perfil (Nombres, Cedula, Telefono, Direccion, Edad, Fecha_Nacimiento, Cargo, Estado_Civil, Correo, Sexo) 
    // values('$nombres','$identificacion','$telefono', '$direccion', '$edad', '$fechaNacimiento', '$cargo',)
    // '$estado', '$correo', '$sexo'");

    $sql="insert into perfil (nombres,Cedula, Telefono, Direccion, Edad, F_Nacimiento, Cargo, Estado_Civil, Correo, Sexo) 
    values('$nombres','$identificacion','$telefono', '$direccion', '$edad', '$fechaNacimiento', '$cargo',
    '$estado', '$correo', '$sexo')";

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