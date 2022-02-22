<?php
include("conexion.php");
include("cabecera.php");

$query ="SELECT * FROM personas";
    
$resultado = mysqli_query($conex, $query);
$todo=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
echo json_encode($todo);    

?>