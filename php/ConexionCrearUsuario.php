<?php
include("conexion.php");//llama al archivo
$nickname = $_POST["nickname"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$descripcion = $_POST["descripcion"];
$email = $_POST["email"];
$password = $_POST["password"];

$passwordHash=password_hash($password, PASSWORD_BCRYPT);

$fotoPerfil = "img/$nickname/perfil.png";

$consultaId= "SELECT Nickname FROM  persona WHERE  Nickname ='$nickname'";
$consultaId=mysqli_query($conexion, $consultaId);

$consultaId=mysqli_fetch_array($consultaId);

if(!$consultaId){
    $sql = "INSERT INTO persona VALUES ('$nickname','$nombre','$apellidos','$edad','$descripcion','$fotoPerfil','$email','$passwordHash')";

    if(mysqli_query($conexion, $sql)){
        mkdir("../img/$nickname");
        copy("../img/default.jpg","../img/$nickname/perfil.png");

        echo "Tu cuenta ha sido creada ";
        echo "<br><a href='index.html'>Iniciar Sesion</a>";
    }
    else{
        echo "Error: " . $sql ."<br>" .mysqli_error($conexion);
        }
}
else{
    echo "El Nombre  de Usuario ya existe.";
    echo "<br><a href='index.html'>Intentalo de nuevo.</a>";
}
mysqli_close($conexion);


?>