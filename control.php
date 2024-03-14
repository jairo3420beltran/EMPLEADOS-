<?php 
include("database.php");



if (isset($_POST["registro"])){

   if(
    strlen($_POST["usuario"])>= 1&&
    strlen($_POST["contraseña"])>= 1&&
    strlen($_POST["confirmacion"])>= 1
   ){
     $usuario=trim($_POST["usuario"]);
     $contraseña=trim($_POST["contraseña"]);
     $confirmar=trim($_POST["confirmacion"]);
   
     $consulta="INSERT INTO registro (usuario,contraseña,confir_contraseña)
     VALUES ('$usuario','$contraseña', '$confirmar')";
     $resultado= mysqli_query($conex, $consulta);


     if($resultado){
       ?>
            <h3 class="subtitle">Tu registro se a completado</h3>
       <?php
     }else{
        ?>
            <h3 class="error">Ocurrio un error</h3>
        <?php
     }

   } else{
        ?>
            <h3 class="error">Llena todos los campos </h3>
        <?php
   }
}
?>