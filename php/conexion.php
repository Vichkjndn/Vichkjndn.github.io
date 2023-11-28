<?php
//declarar variables
$servidor = "localhost";//
$usuario = "root";
$contrasena = "";
$BD = "redsocial";

$conexion= mysqli_connect($servidor, $usuario, $contrasena, $BD);

if(!$conexion){
    echo"Ah fallado la conexion <br>";
    die("Conection failed".mysqli_connect_error());
}  
        else{
//echo "conexion exitosa";
  }
?>