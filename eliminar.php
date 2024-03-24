<?php
include ('database.php');
$id_usuario = $_GET["id_usuario"];
$sql="DELETE FROM perfil WHERE id_usuario=$id_usuario";
$result=mysqli_query($conex,$sql);
header('Location: perfil.php');

?>