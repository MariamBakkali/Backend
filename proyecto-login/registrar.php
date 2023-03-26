<?php
include_once 'db5.php';

if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $password=$_POST['pass'];


    $sql="INSERT INTO datos (Nombre, Apellidos, Email, Pass)
    VALUES ('$nombre','$apellidos', '$email', '$password')";

if($conexion->query($sql)===TRUE){
    echo "Se ha añadido correctamente.";
}else{
    echo "Ha ocurrido un error.".$conexion->connect_error;
}
$conexion->close();
}
?>
