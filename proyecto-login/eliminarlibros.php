<?php
include_once 'db5.php';



if(isset($_POST['submit-borrar'])){
    $autor=$_POST['autor'];
    
    $sql="DELETE FROM libros WHERE autor='Autor'";
    

if($conexion->query($sql)===TRUE){
    echo "Se ha añadido correctamente.";
}else{
    echo "Ha ocurrido un error.".$conexion->connect_error;
}
$conexion->close();
}