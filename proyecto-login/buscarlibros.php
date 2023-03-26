
<?php
session_start();

include 'db5.php';
if(isset($_POST['titulo'])&& isset($_POST['autor'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $titulo=validate($_POST['titulo']);
    $autor=validate($_POST['autor']);
 
    if(empty($titulo)){
         
             header("Location:pag-acceder.php?error=titulo Introduzca un titulo");
        exit();
    }else if(empty($autor)){
        header("Location:pag-acceder.php?error=autor Introduzca un autor");
        exit();
    }else{
        $sql="SELECT * FROM libros WHERE Título ='$titulo' and Autor='$autor'";
        echo $sql;
        $resultado=mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resultado)===1){
            $row=$resultado->fetch_assoc();
        
  
        if($row['Título']===$titulo && $row['Autor']===$autor){
            echo "¡Conectando! ";
            $_SESSION['titulo']=$row['Título'];
            $_SESSION['autor']=$row['Autor'];
           

            header("Location: areapersonal2.php");
            exit();
        }
    }else{
        header("Location:areapersonal2.php?error=Email o Contraseña incorrectas");
        exit();

    }
    }
}

?>