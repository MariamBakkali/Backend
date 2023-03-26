
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
   
    <h2>Regístrate</h2>
    </div>
    <form method="POST" action="registrar.php">
        <div class="label-formulario">
        <label>Nombre</label>
        <input type="text" name="nombre">
        </div>
        <div>
        <div class="label-formulario">
        <label>Apellidos</label>
        <input type="text" name="apellidos">
        </div>
        <div>
            <label class="label-formulario"> Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label class="label-formulario"> Contraseña</label>
            <input type="text" name="pass">
        </div>
        <button type="submit" name="submit" value="submit">Registrar</button>
    </form>


</div>
</div>
</div>
</div>
</body>
</html>





