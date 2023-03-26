<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formulario{
            width:500px;
            margin: 0 auto;
        }
        </style>
</head>
<body>
<div class="formulario">
    <div class="contenedor">
      <div class="row">
        <div class="columnas">
         <div class="header">
         <h2>Bienvenidos a su área personal  <?php echo $_SESSION['email'];?></h2>
         <h3>Librería</h3>
            
            <a href="pag.añadirlibro.php">Añadir libros </a>
            </br>
            <a href="pag.buscarlibro.php">Buscar libros</a>
            </br>
            <a href="pag.borrarlibro.php">Eliminar libros</a>
            </br>

        <h3>Otros accesos</h3>

    
           <a href="cuentabancaria.php">Acceder a cuenta bancaria</a>
           </br>
        <h3>Cerrar sesión</h3>   
           <a href="cerrar.php">Cerrar sesión</a>
            </br>


        </div>
       </div>
      </div>
     </div>
    </div>
   </body>
</html>
