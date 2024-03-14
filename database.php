<?php 
conexion ();
function conexion(){
    $server = 'localhost';
    $user='root';
    $pass= '';
    $db='db_usuarios';
    $conectar=mysqli_connect($server,$user,$pass, $db) or die("Error en la conexion");
    return $conectar;
}
?>