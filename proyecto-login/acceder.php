<?php

session_start();

include 'db5.php';

if(isset($_POST['email'])&& isset($_POST['pass'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $password=validate($_POST['pass']);
 
    if(empty($email)){
         
             header("Location:pag-acceder.php?error=email Introduzca un email");
        exit();
    }else if(empty($password)){
        header("Location:pag-acceder.php?error=pass Introduzca una contraseña");
        exit();
    }else{
        $sql="SELECT * FROM datos WHERE Email ='$email' and pass='$password'";
        echo $sql;
        $resultado=mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resultado)===1){
            $row=$resultado->fetch_assoc();
        
  
        if($row['Email']===$email && $row['Pass']===$password){
            echo "¡Conectando! ";
            $_SESSION['email']=$row['Email'];
            $_SESSION['nombre']=$row['Nombre'];
           

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