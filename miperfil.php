<?php
include("php/conexion.php");
include("php/ValidarSesion1.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.png"  type="image/x-icon">
    <title>Proyec One</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>

<header>
         <div id="logo">
            <img src="img/LOGO.png"  alt="logo" height="170" width="480">
         </div>

<nav class="menu">
<ul>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="miperfil.php">Mi Perfil</a></li>
    <li><a href="amigos.php">Amigos</a></li>
    <li><a href="fotos.php">Agregar Amigos </a></li>
    <li><a href="agregar.php">Agregar Amigos </a></li>
    <li><a href="php/CerrarSesion.php">Cerrar Sesion</a></li>
</ul>
</nav>
    </header>

    <section id="perfil">
<img  src="<?php echo "$_SESSION[fotoPerfil]"?>" width="200">
<h1><?php echo "$_SESSION[nombre] $_SESSION[apellidos]"?></h1>
<h3>
    <form action="php/CambiarFoto.php" method="POST" enctype="multipart/form-data">
    Añadir imagen: <input name="archivo" id="archivo" type="file" accept=".jpg, .jpeg, .png" required>
<input type="submit" name="subir" value="Subir">
</form>
</h3>

<p class="Parrafo">Descripcion de mi perfil</p>
<p class="parrafo"><?php echo "$_SESSION[descripcion]"?></p>
    </section>

    <section id="recuadros">
     <h2>Mis amigos</h2>

<section class="recuadro">
    <img src="img/yare.jpeg" height="150">
    <h2>Amigo 1</h2>
    <p>Yare</p>
    <a href="" class="boton">ver perfil</a>
</section>
<section>
    <section class="recuadro">
        <img src="img/abraham.jpeg" height="150">
        <h2>Amigo 2</h2>
        <p>Un loquito del centro</p>
        <a href="" class="boton">ver perfil</a>
    </section>

    <section class="recuadro">
        <img src="img/yuz.jpg" height="150">
        <h2>Amiga 3</h2>
        <p>Aventurera</p>
        <a href="" class="boton">ver perfil</a>
    </section>

    <section class="recuadro">
        <img src="img/lalodespierto.jpg" height="150">
        <h2>Amigo 4</h2>
        <p>Un Soñador</p>
        <a href="" class="boton">ver perfil</a>
    </section>

    <section class="recuadro">
        <img src="img/chisgueteensombras.jpg" height="150">
        <h2>Amigo 5</h2>
        <p>La sombra de chisguete</p>
        <a href="" class="boton">ver perfil</a>
    </section>

    <section class="recuadro">
        <img src="img/lalomimiendo.jpg" height="150">
        <h2>Amigo 6</h2>
        <p>Un Manco </p>
        <a href="" class="boton">ver perfil</a>
    </section>

</section>
</section>

   
<section id="recuadros">
<h2>Mis fotos</h2>
<section class="recuadro" >
    <img src="img/yo_otravez.jpeg" height="200">
</section>
<section class="recuadro">
    <img src="img/vaca.jpg" height="200">
</section>
<section class="recuadro">
    <img src="img/yo_3vez.jpg" height="200">
</section>
<section class="recuadro">
    <img src="img/yo_4vezz.jpg" height="200">
</section>
</section>

    <footer>
        <p>copirith copy; @Vick</p>
    </footer>

</body>
</html>