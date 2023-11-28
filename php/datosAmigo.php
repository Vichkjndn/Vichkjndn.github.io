<?php
if ($nickname==$nicknameA)
{
    header ('Location: miperfil1.php');
}
$consulta ="SELECT * FROM persona WHERE Nickname='$nicknameA'";
$consulta=mysqli_query($conexion, $consulta);
$consulta=mysqli_fetch_array($consulta);


$nombreA        =$consulta['Nombre'];
$apellidosA     =$consulta['Apellidos'];
$edad           =$consulta['Edad'];
$desacripcionA  =$consulta['Descripcion'];
$fotoPerfilA    =$consulta['FotoPerfil'];

?>