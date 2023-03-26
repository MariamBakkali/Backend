<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
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
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
    <h2>Borrar libros</h2>
    <!-- <h3>Rellene la información y nos pondremos en contacto</h3> -->
                </div>
    <form method="POST" action="eliminarlibros.php">
        
        <div class="form-group">
            <label>Borrar un libro</label>
            <input type="text" name="nombre2" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit-borrar" value="submit">Borrar</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>