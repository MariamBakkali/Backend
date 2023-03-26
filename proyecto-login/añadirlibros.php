<?php
include_once 'db5.php';

if(isset($_POST['submit'])){
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $año=$_POST['año'];
    $precio=$_POST['precio'];


    $sql="INSERT INTO libros (Título, Autor, Año_publicación, Precio)
    VALUES ('$titulo','$autor', '$año', '$precio')";

if($conexion->query($sql)===TRUE){
    echo "Se ha añadido correctamente.";
}else{
    echo "Ha ocurrido un error.".$conexion->connect_error;
}
$conexion->close();
}
?>