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
    <style>
        .container {
            text-align: center;
        }

        .imagenes {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<header>
    <m>M</m>usic <f>F</f>an
    <div class='dropdown-container'>
        <button class='dropdown-btn'>
            <img src='Portada\User.png' class='user-icon'>
        </button>
        <div class='dropdown-content'>
            <a href='Demosession.php'>Yo</a> <br> <br>
            <a href='Avance Player/Reproductor.php'>Biblioteca</a> <br> <br>
            <a href='CerrarSession.php'>Cerrar sesión</a>
        </div>
    </div>
</header>
<nav>
    <!-- Botón 1 -->
    <div class='Buttons2'>
        <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
        <!-- Botón 2 desplegable -->
        <div class='dropdown-container2'>
            <button class='my-btn2'>Género</button>
            <div class='dropdown-content2'>
                <a href='rock.html'>Rock</a> <br>
                <a href='Indie.html'>Indie</a> <br>
                <a href='pop.html'>Undergorund</a> <br>
                <a href='pop.html'>Latino</a> <br>
            </div>
        </div>
    </div>
</nav>
<!-- Content -->
<content>
    <br>
    <h2>Lo más Nuevo!</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/SpaceJunk.jpg' class='imagen-modificada'> <br> <br>
            Wang Chung - Space junk <br>
            <button onclick='playAudio()' class='play-btn'> </button>
            <button onclick='pauseAudio()' class='pause-btn'> </button>
            <audio id='myAudio'>
                <source src='music/Space Junk - Wang Chung.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/DizzyPortada.jpg' class='imagen-modificadaD'> <br> <br>
            Joakim Karud - Dizzy <br>
            <button onclick='playAudioD()' class='play-btn'></button>
            <button onclick='pauseAudioD()' class='pause-btn'></button>
            <audio id='myAudioD'>
                <source src='music/Dizzy - Joakim Karud (320).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/GoShoppingPortada.jpeg' class='imagen-modificadaG'> <br> <br>
            BranVan3000 - Go shopping <br>
            <button onclick='playAudioG()' class='play-btn'></button>
            <button onclick='pauseAudioG()' class='pause-btn'></button>
            <audio id='myAudioG'>
                <source src='music/Go Shopping - Bran Van 3000 (320).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/S3RLPortada.jpeg' class='imagen-modificadaS'> <br> <br>
            S3RL - MTC <br>
            <button onclick='playAudioS()' class='play-btn'></button>
            <button onclick='pauseAudioS()' class='pause-btn'></button>
            <audio id='myAudioS'>
                <source src='music/Mtc - S3RL.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>

    <h2>Lo mejor de Nirvana!</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/CAYAPortada.jpeg' class='imagen-modificada2'> <br> <br>
            Nirvana - Come as you are <br>
            <button onclick='playAudio2()' class='play-btn'></button>
            <button onclick='pauseAudio2()' class='pause-btn'></button>
            <audio id='myAudio2'>
                <source src='music/Come As You Are - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/SomethingPortada.jpeg' class='imagen-modificada3'> <br> <br>
            Nirvana - Something in the way <br>
            <button onclick='playAudio3()' class='play-btn'></button>
            <button onclick='pauseAudio3()' class='pause-btn'></button>
            <audio id='myAudio3'>
                <source src='music/Something In The Way - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/NevermindPortada.jpg' class='imagen-modificada4'> <br> <br>
            Nirvana - Drain you <br>
            <button onclick='playAudio4()' class='play-btn'></button>
            <button onclick='pauseAudio4()' class='pause-btn'></button>
            <audio id='myAudio4'>
                <source src='music/Drain You - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>

    <h2>Clásicos de Interpol</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/InterpolPortada.jpg' class='imagen-modificadaIn1'> <br> <br>
            Interpol - Evil <br>
            <button onclick='playAudioIn1()' class='play-btn'></button>
            <button onclick='pauseAudioIn1()' class='pause-btn'></button>
            <audio id='myAudioIn1'>
                <source src='music/Evil - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/TurnBrightPortada.jpg' class='imagen-modificadaIn2'> <br> <br>
            Interpol - Obstacle 1 <br>
            <button onclick='playAudioIn2()' class='play-btn'></button>
            <button onclick='pauseAudioIn2()' class='pause-btn'></button>
            <audio id='myAudioIn2'>
                <source src='music/Obstacle 1.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/TheRoverPortada.jpg' class='imagen-modificadaIn3'> <br> <br>
            Interpol - PDA <br>
            <button onclick='playAudioIn3()' class='play-btn'></button>
            <button onclick='pauseAudioIn3()' class='pause-btn'></button>
            <audio id='myAudioIn3'>
                <source src='music/PDA (2012 Remaster).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/InterpolPortada.jpg' class='imagen-modificadaIn4'> <br> <br>
            Interpol - Narc <br>
            <button onclick='playAudioIn4()' class='play-btn'></button>
            <button onclick='pauseAudioIn4()' class='pause-btn'></button>
            <audio id='myAudioIn4'>
                <source src='music/Narc - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>
</div>

<script src='Menú.js'></script>
</content>
</html>
";
//USUARIO INVITADO
} else {
    echo "
    <html>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='Menu.css'>
    <style>
        .container {
            text-align: center;
        }

        .imagenes {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<header>
    <m>M</m>usic <f>F</f>an
    <div class='dropdown-container'>
        <button class='dropdown-btn'>
            <img src='Portada\User.png' class='user-icon'>
        </button>
        <div class='dropdown-content'>
            <a href='Demosession.php'>Yo</a> <br> <br>
            <a href='IniciarSesion.html'>Iniciar Sesión</a> <br> <br>
            <a href='Bibioteca.php'>Biblioteca</a> <br> <br>
        </div>
    </div>
</header>
<nav>
    <!-- Botón 1 -->
    <div class='Buttons2'>
        <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
        <!-- Botón 2 desplegable -->
        <div class='dropdown-container2'>
            <button class='my-btn2'>Género</button>
            <div class='dropdown-content2'>
                <a href='rock.html'>Rock</a> <br>
                <a href='Indie.html'>Indie</a> <br>
                <a href='pop.html'>Undergorund</a> <br>
                <a href='pop.html'>Latino</a> <br>
            </div>
        </div>
    </div>
</nav>
<!-- Content -->
<content>
    <br>
    <h2>Lo más Nuevo!</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/SpaceJunk.jpg' class='imagen-modificada'> <br> <br>
            Wang Chung - Space junk <br>
            <button onclick='playAudio()' class='play-btn'> </button>
            <button onclick='pauseAudio()' class='pause-btn'> </button>
            <audio id='myAudio'>
                <source src='music/Space Junk - Wang Chung.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/DizzyPortada.jpg' class='imagen-modificadaD'> <br> <br>
            Joakim Karud - Dizzy <br>
            <button onclick='playAudioD()' class='play-btn'></button>
            <button onclick='pauseAudioD()' class='pause-btn'></button>
            <audio id='myAudioD'>
                <source src='music/Dizzy - Joakim Karud (320).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/GoShoppingPortada.jpeg' class='imagen-modificadaG'> <br> <br>
            BranVan3000 - Go shopping <br>
            <button onclick='playAudioG()' class='play-btn'></button>
            <button onclick='pauseAudioG()' class='pause-btn'></button>
            <audio id='myAudioG'>
                <source src='music/Go Shopping - Bran Van 3000 (320).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/S3RLPortada.jpeg' class='imagen-modificadaS'> <br> <br>
            S3RL - MTC <br>
            <button onclick='playAudioS()' class='play-btn'></button>
            <button onclick='pauseAudioS()' class='pause-btn'></button>
            <audio id='myAudioS'>
                <source src='music/Mtc - S3RL.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>

    <h2>Lo mejor de Nirvana!</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/CAYAPortada.jpeg' class='imagen-modificada2'> <br> <br>
            Nirvana - Come as you are <br>
            <button onclick='playAudio2()' class='play-btn'></button>
            <button onclick='pauseAudio2()' class='pause-btn'></button>
            <audio id='myAudio2'>
                <source src='music/Come As You Are - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/SomethingPortada.jpeg' class='imagen-modificada3'> <br> <br>
            Nirvana - Something in the way <br>
            <button onclick='playAudio3()' class='play-btn'></button>
            <button onclick='pauseAudio3()' class='pause-btn'></button>
            <audio id='myAudio3'>
                <source src='music/Something In The Way - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/NevermindPortada.jpg' class='imagen-modificada4'> <br> <br>
            Nirvana - Drain you <br>
            <button onclick='playAudio4()' class='play-btn'></button>
            <button onclick='pauseAudio4()' class='pause-btn'></button>
            <audio id='myAudio4'>
                <source src='music/Drain You - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>

    <h2>Clásicos de Interpol</h2>
    <div class='container'>
        <div class='imagenes'>
            <img src='Portada/InterpolPortada.jpg' class='imagen-modificadaIn1'> <br> <br>
            Interpol - Evil <br>
            <button onclick='playAudioIn1()' class='play-btn'></button>
            <button onclick='pauseAudioIn1()' class='pause-btn'></button>
            <audio id='myAudioIn1'>
                <source src='music/Evil - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/TurnBrightPortada.jpg' class='imagen-modificadaIn2'> <br> <br>
            Interpol - Obstacle 1 <br>
            <button onclick='playAudioIn2()' class='play-btn'></button>
            <button onclick='pauseAudioIn2()' class='pause-btn'></button>
            <audio id='myAudioIn2'>
                <source src='music/Obstacle 1.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/TheRoverPortada.jpg' class='imagen-modificadaIn3'> <br> <br>
            Interpol - PDA <br>
            <button onclick='playAudioIn3()' class='play-btn'></button>
            <button onclick='pauseAudioIn3()' class='pause-btn'></button>
            <audio id='myAudioIn3'>
                <source src='music/PDA (2012 Remaster).mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='imagenes'>
            <img src='Portada/InterpolPortada.jpg' class='imagen-modificadaIn4'> <br> <br>
            Interpol - Narc <br>
            <button onclick='playAudioIn4()' class='play-btn'></button>
            <button onclick='pauseAudioIn4()' class='pause-btn'></button>
            <audio id='myAudioIn4'>
                <source src='music/Narc - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>
    </div>
</div>

<script src='Menú.js'></script>
</content>
</html>
";
}
?>

