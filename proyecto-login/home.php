<?php 

session_start();

if (isset($_SESSION['nombre']) && isset($_SESSION['email'])) 
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        </style>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
                    <div class="page-header">
     <h2>Bienvenido a la web</h2>
     </div>
     <a href="pag-acceder.php">Inicia sesión</a>
    </br>
     <a href="cerrar.php">Cerrar Sesión</a>
     </div>
     </div>

</body>

</html>
