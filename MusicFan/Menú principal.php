<?php
session_start();

if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='Menu.css'>
    </head>
<header> <m>M</m>usic <f>F</f>an
    <div class='dropdown-container'>
       <img src='Portada\User.png'> <button class='dropdown-btn'>User</button> </img>
        <div class='dropdown-content'>
            <a href='Demosession.php'>Yo</a> <br> <br>
            <a href='IniciarSesion.html'>Iniciar Sesión</a> <br> <br>
            <a href='Biblioteca.php'>Biblioteca</a> <br> <br>
            <a href='CerrarSession.php'>Cerrar sesión</a>
        </div>
    </div>
</header>
<nav>

    <!--Botón 1-->
    <div class='Buttons2'>
    <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
     <!--Botón 2 desplegable-->
    <div class='dropdown-container2'>
        <button class='my-btn2'>Género</button>
        <div class='dropdown-content2'>
            <a href='rock.html'>Rock</a> <br>
            <a href='Indie.html'>Indie</a> <br>
            <a href='pop.html'>Underground</a> <br>
            <a href='pop.html'>Latino</a> <br>
        </div>
    </div>
    </div>
</nav>
<!--Content-->
<content>
<br>

<div class='imagenes'>
    <img src='Portada\SpaceJunk.jpg' class='imagen-modificada'> <br> <br>
    <audio controls class='audio'>
    <source src='music\Space Junk - Wang Chung.mp3' type='audio/mpeg'>
  </audio>

</div>
</content>
</html>";

} else {
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='Menu.css'>
    </head>
<header> <m>M</m>usic <f>F</f>an
    <div class='dropdown-container'>
       <img src='Portada\User.png'> <button class='dropdown-btn'>User</button> </img>
        <div class='dropdown-content'>
            <a href='Demosession.php'>Yo</a> <br> <br>
            <a href='IniciarSesion.html'>Iniciar Sesión</a> <br> <br>
            <a href='Biblioteca.php'>Biblioteca</a> <br> <br>
            <a href='CerrarSession.php'>Cerrar sesión</a>
        </div>
    </div>
</header>
<nav>

    <!--Botón 1-->
    <div class='Buttons2'>
    <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
     <!--Botón 2 desplegable-->
    <div class='dropdown-container2'>
        <button class='my-btn2'>Género</button>
        <div class='dropdown-content2'>
            <a href='rock.html'>Rock</a> <br>
            <a href='Indie.html'>Indie</a> <br>
            <a href='pop.html'>Underground</a> <br>
            <a href='pop.html'>Latino</a> <br>
        </div>
    </div>
    </div>
</nav>
<!--Content-->
<content>
<br>
<div class='imagenes'>
    <img src='Portada\SpaceJunk.jpg' class='imagen-modificada'> <br> <br>
    
</div>
</content>
</html>";
}
?>

