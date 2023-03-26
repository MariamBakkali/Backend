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
   
    <h2>Añadir libro</h2>
    </div>
    <form method="POST" action="añadirlibros.php">
        <div class="label-formulario">
            <label>Título</label>
            <input type="text" name="titulo">
        </div>
        <div>
        <div class="label-formulario">
            <label>Autor</label>
            <input type="text" name="autor">
        </div>
        <div>
            <label class="label-formulario"> Año de publicación</label>
            <input type="text" name="año">
        </div>
        <div>
            <label class="label-formulario"> Precio</label>
            <input type="text" name="precio">
        </div>
        <button type="submit" name="submit" value="submit">Añadir</button>
    </form>


</div>
</div>
</div>
</div>
</body>
</html>
