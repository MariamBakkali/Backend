<?php
$servidor='localhost';
$usuario='root';
$pass='';
$base_datos="inicio";

$conexion= new mysqli($servidor, $usuario, $pass, $base_datos)
or die("imposible conectar");


?>