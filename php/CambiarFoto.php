<?php
include("ValidarSesion1.php");

$ubicacion="../img/$nickname/perfil.png";
$archivo= $_FILES['archivo'] ['tmp_name'];

if(move_uploaded_file($archivo, $ubicacion)) {
    echo "El archivo ha sido subido";
    header('Location:../miperfil1.php'); //Redirecciona a la pagina mi perfil

}
else{
    echo "trate de nuevo";
    echo "<br> <a href='../miperfil1.php'> Volver. </a>";

}
?>