<?php
include ('perfil.php')
$id_usuario=$_GET["id_usuario"]
$sql=$conex->query("delete from perfil where id_usuario=$id_usuario ");
$result=mysqli_query($conex,$sql);
header('Location: perfil.php');

?>