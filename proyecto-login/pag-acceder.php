
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
    <h2>INICIO SESIÓN</h2>

    </div>
    <form method="POST" action="acceder.php">
        <?php
        if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']?></p>
        <?php }?>




        <div class="label-formulario">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        </div>
        <div>
        <div class="label-formulario">
        <label>Contraseña</label>
        <input type="text" name="pass"class="form-control">
        </div>
        
        <button type="submit" class ="btn btn-primary" name="submit" value="submit">Acceder</button>
    </form>
    <h4>Si aún no tiene cuenta, Regístrese</h4>
    <a href="pag-registrarse.php">Registrar</a>


</div>
</div>
</div>
</div>
<!--PARTE JAVASCRIPT DEL LOADING-->
<script>
// Loading
var Loading=(loadingDelayHidden=0)=>{let loading=null;const myLoadingDelayHidden=loadingDelayHidden;let imgs=[];let lenImgs=0;let counterImgsLoading=0;function incrementCounterImgs(){counterImgsLoading+=1;if(counterImgsLoading===lenImgs){hideLoading()}}function hideLoading(){if(loading!==null){loading.classList.remove('show');setTimeout(function(){loading.remove()},myLoadingDelayHidden)}}function init(){document.addEventListener('DOMContentLoaded',function(){loading=document.querySelector('.loading');imgs=Array.from(document.images);lenImgs=imgs.length;if(imgs.length===0){hideLoading()}else{imgs.forEach(function(img){img.addEventListener('load',incrementCounterImgs,false)})}})}return{'init':init}}

Loading(1000).init();
</script>
</body>
</html>




