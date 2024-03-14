<?php 
if (!empaty($_POST["registro"])){

    if (empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["confirmacion"]) ){
        echo'rellene todos los campos ';
    }else{
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $confirmar=$_POST["confirmacion"];
        $sql=$conexion->query("insert into registro (usuario, contraseña, confirmar_contraseña) values('$usuario', '$contraseña','$confirmar')");
        if($sql==1){
        echo'usuario registrado satisfactoriamente';    
        }
    }
}
?>