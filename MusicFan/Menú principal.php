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
       <img src = 'Portada\User.png'> <button class='dropdown-btn'>User</button> </img>
        <div class='dropdown-content'>
            <a href='Demosession.php'>Yo</a> <br> <br>
            <a href='Avance Player\Reproductor.php'>Biblioteca</a> <br> <br>
            <a href='CerrarSession.php'>Cerrar sesion</a>
        </div>
    </div>
</header>
<nav>

    <!--Botón 1-->
    <div class='Buttons2'>
    <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
     <!--Botón 2 desplegable-->
    <div class='dropdown-container2'>
        <button class='my-btn2'>Genero</button>
        <div class='dropdown-content2'>
  <a href='rock.html'>Rock</a> <br>
  <a href='Indie.html'>Indie</a> <br>
  <a href='pop.html'>Undergorund</a> <br>
  <a href='pop.html'>Latino</a> <br>

</div>
</div>
</div>
</nav>
<!--Content-->
<content>
<br>

<h2> Lo más Nuevo!</h2>

<div class='container'>
    <div class='imagenes'>
      <img src='Portada\SpaceJunk.jpg' class='imagen-modificada'> <br> <br>
      <button onclick='playAudio()'>Play</button>
      <button onclick='pauseAudio()'>Pause</button>
      <audio id='myAudio'>
        <source src='music/Space Junk - Wang Chung.mp3' type='audio/mpeg'>
      </audio>
    </div>
  
    <div class='imagenesD'>
      <img src='Portada\DizzyPortada.jpg' class='imagen-modificadaD'> <br> <br>
      <button onclick='playAudioD()'>Play</button>
      <button onclick='pauseAudioD()''>Pause</button>
      <audio id='myAudioD'>
        <source src='music\Dizzy - Joakim Karud (320).mp3' type='audio/mpeg'>
      </audio>
    </div>

    <div class='imagenesG'>
        <img src='Portada\GoShoppingPortada.jpeg' class='imagen-modificadaG'> <br> <br>
        <button onclick='playAudioG()'>Play</button>
        <button onclick='pauseAudioG()'>Pause</button>
        <audio id='myAudioG'>
          <source src='music\Go Shopping - Bran Van 3000 (320).mp3' type='audio/mpeg'>
        </audio>
      </div>
  </div>
  
    
     <h2>Lo mejor de Nirvana!</h2>
     <div class='imagenes2'>
        <img src='Portada\CAYAPortada.jpeg' class='imagen-modificada2'> <br> <br>
        <button onclick='playAudio2()'>Play</button>
        <button onclick='pauseAudio2()'>Pause</button>
        <audio id='myAudio2'>
          <source src='music\Come As You Are - Nirvana.mp3' type='audio/mpeg'>
        </audio>
         <script src='Menú.js'></script>

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

