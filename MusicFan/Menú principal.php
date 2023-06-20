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
<header>
    <m>M</m>usic <f>F</f>an <h1>[Beta]</h1>
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
        <button class='my-btn2' onclick=\"location.href='Acerca.php'\">Acerca de nosotros</button>
    </div>
</nav>
<!-- Contenido -->
<content>
    <!-- Código de las tarjetas de presentación -->
     <br>
    <h2>Lo más Nuevo!</h2>
    <div class='container'>
        <!-- Tarjetas de las canciones más nuevas -->
        <div class='card'>
            <img src='Portada/SpaceJunk.jpg'>
            <h3>Wang Chung <br> <br>
            Space junk</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudio')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudio')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio'>
                <source src='music/Space Junk - Wang Chung.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
        <img src='Portada/DizzyPortada.jpg'>
        <h3>Joakim Karud <br> <br>
            Dizzy</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioD')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioD')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioD'>
            <source src='music/Dizzy - Joakim Karud.mp3' type='audio/mpeg'>
        </audio>
    </div>

  <div class='card'>
        <img src='Portada/GoShoppingPortada.jpeg'>
        <h3>Bran Van 3000<br> <br>
        Go shopping</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioG')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioG')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioG'>
            <source src='music/Go Shopping - Bran Van 3000 (320).mp3' type='audio/mpeg'>
        </audio>
    </div>

    <div class='card'>
        <img src='Portada\S3RLPortada.jpeg'>
        <h3>SRL<br> <br>
        MTC</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioS')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioS')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioS'>
            <source src='music\Mtc - S3RL.mp3' type='audio/mpeg'>
        </audio>
    </div>

        <!-- Resto de las tarjetas de canciones más nuevas -->
    </div>

    <br>
    <h2>Lo mejor de Nirvana!</h2>
    <div class='container'>
        <!-- Tarjetas de las mejores canciones de Nirvana -->
        <div class='card'>
            <img src='Portada/CAYAPortada.jpeg'>
            <h3>Nirvana<br> <br>
            Come as you are</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio2')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio2')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio2'>
                <source src='music/Come As You Are - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
            <img src='Portada/NevermindPortada.jpg'>
            <h3>Nirvana<br> <br>
            Drain you</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio3')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio3')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio3'>
                <source src='music/Drain You - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
            <img src='Portada/SomethingPortada.jpeg'>
            <h3>Nirvana<br> <br>
            Something in the way</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio4')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio4')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio4'>
                <source src='music/Something In The Way - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        
        <div class='card'>
            <img src='Portada/LithiumPortada.jpg'>
            <h3>Nirvana<br> <br>
           Lithium</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio5')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio5')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio5'>
                <source src='music/Lithium - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <!-- Resto de las tarjetas de las mejores canciones de Nirvana -->
    </div>

<br>
    <h2>Clásicos de Interpol</h2>
    <div class='container'>
        <!-- Tarjetas de los clásicos de Interpol -->
        <div class='card'>
            <img src='Portada/InterpolPortada.jpg'>
            <h3>interpol<br> <br>
            Evil</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn1')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn1')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn1'>
                <source src='music/Evil - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>


        <div class='card'>
            <img src='Portada/TurnBrightPortada.jpg'>
            <h3>interpol<br> <br>
            PDA</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn2')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn2')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn2'>
                <source src='music/PDA (2012 Remaster).mp3' type='audio/mpeg'>
            </audio>
        </div>


        <div class='card'>
            <img src='Portada/InterpolPortada.jpg'>
            <h3>interpol<br> <br>
            Obstacle 1</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn3')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn3')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn3'>
                <source src='music/Obstacle 1.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
        <img src='Portada/TheRoverPortada.jpg'>
        <h3>interpol<br> <br>
        Narc</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioIn4')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioIn4')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioIn4'>
            <source src='music/Narc - Interpol.mp3' type='audio/mpeg'>
        </audio>
    </div>


        <!-- Resto de las tarjetas de los clásicos de Interpol -->
    </div>
</content>

<script>
    function playAudio(audioId) {
        var audio = document.getElementById(audioId);
        audio.play();
    }

    function pauseAudio(audioId) {
        var audio = document.getElementById(audioId);
        audio.pause();
    }
</script>

</html>

";
//USUARIO INVITADO
} else {
    echo "
    <html>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='Menu.css'>
</head>
<header>
    <m>M</m>usic <f>F</f>an <h1>[Beta]</h1>
    <div class='dropdown-container'>
        <button class='dropdown-btn'>
            <img src='Portada\User.png' class='user-icon'>
        </button>
        <div class='dropdown-content'>
        <a href='IniciarSesion.html'>Iniciar Sesión</a> <br> <br>
        <a href='Registrar.html'>Registrarse</a> <br> <br>
        </div>
    </div>
</header>
<nav>
    <!-- Botón 1 -->
    <div class='Buttons2'>
        <button class='my-btn2' onclick=\"location.href='Descargar.php'\">Descargas</button>
        <!-- Botón 2 desplegable -->
        <button class='my-btn2' onclick=\"location.href='Acerca.php'\">Acerca de nosotros</button>
    </div>
</nav>
<!-- Contenido -->
<content>
    <!-- Código de las tarjetas de presentación -->
     <br>
    <h2>Lo más Nuevo!</h2>
    <div class='container'>
        <!-- Tarjetas de las canciones más nuevas -->
        <div class='card'>
            <img src='Portada/SpaceJunk.jpg'>
            <h3>Wang Chung <br> <br>
            Space junk</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudio')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudio')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio'>
                <source src='music/Space Junk - Wang Chung.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
        <img src='Portada/DizzyPortada.jpg'>
        <h3>Joakim Karud <br> <br>
            Dizzy</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioD')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioD')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioD'>
            <source src='music/Dizzy - Joakim Karud.mp3' type='audio/mpeg'>
        </audio>
    </div>

  <div class='card'>
        <img src='Portada/GoShoppingPortada.jpeg'>
        <h3>Bran Van 3000<br> <br>
        Go shopping</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioG')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioG')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioG'>
            <source src='music/Go Shopping - Bran Van 3000 (320).mp3' type='audio/mpeg'>
        </audio>
    </div>

    <div class='card'>
        <img src='Portada\S3RLPortada.jpeg'>
        <h3>SRL<br> <br>
        MTC</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioS')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioS')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioS'>
            <source src='music\Mtc - S3RL.mp3' type='audio/mpeg'>
        </audio>
    </div>

        <!-- Resto de las tarjetas de canciones más nuevas -->
    </div>

    <br>
    <h2>Lo mejor de Nirvana!</h2>
    <div class='container'>
        <!-- Tarjetas de las mejores canciones de Nirvana -->
        <div class='card'>
            <img src='Portada/CAYAPortada.jpeg'>
            <h3>Nirvana<br> <br>
            Come as you are</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio2')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio2')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio2'>
                <source src='music/Come As You Are - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
            <img src='Portada/NevermindPortada.jpg'>
            <h3>Nirvana<br> <br>
            Drain you</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio3')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio3')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio3'>
                <source src='music/Drain You - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
            <img src='Portada/SomethingPortada.jpeg'>
            <h3>Nirvana<br> <br>
            Something in the way</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio4')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio4')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio4'>
                <source src='music/Something In The Way - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        
        <div class='card'>
            <img src='Portada/LithiumPortada.jpg'>
            <h3>Nirvana<br> <br>
           Lithium</h3>
            <div class='buttons'>
            <button onclick=\"playAudio('myAudio5')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudio5')\" class='pause-btn'></button>
            </div>
            <audio id='myAudio5'>
                <source src='music/Lithium - Nirvana.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <!-- Resto de las tarjetas de las mejores canciones de Nirvana -->
    </div>

<br>
    <h2>Clásicos de Interpol</h2>
    <div class='container'>
        <!-- Tarjetas de los clásicos de Interpol -->
        <div class='card'>
            <img src='Portada/InterpolPortada.jpg'>
            <h3>interpol<br> <br>
            Evil</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn1')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn1')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn1'>
                <source src='music/Evil - Interpol.mp3' type='audio/mpeg'>
            </audio>
        </div>


        <div class='card'>
            <img src='Portada/TurnBrightPortada.jpg'>
            <h3>interpol<br> <br>
            PDA</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn2')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn2')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn2'>
                <source src='music/PDA (2012 Remaster).mp3' type='audio/mpeg'>
            </audio>
        </div>


        <div class='card'>
            <img src='Portada/InterpolPortada.jpg'>
            <h3>interpol<br> <br>
            Obstacle 1</h3>
            <div class='buttons'>
                <button onclick=\"playAudio('myAudioIn3')\" class='play-btn'></button>
                <button onclick=\"pauseAudio('myAudioIn3')\" class='pause-btn'></button>
            </div>
            <audio id='myAudioIn3'>
                <source src='music/Obstacle 1.mp3' type='audio/mpeg'>
            </audio>
        </div>

        <div class='card'>
        <img src='Portada/TheRoverPortada.jpg'>
        <h3>interpol<br> <br>
        Narc</h3>
        <div class='buttons'>
            <button onclick=\"playAudio('myAudioIn4')\" class='play-btn'></button>
            <button onclick=\"pauseAudio('myAudioIn4')\" class='pause-btn'></button>
        </div>
        <audio id='myAudioIn4'>
            <source src='music/Narc - Interpol.mp3' type='audio/mpeg'>
        </audio>
    </div>


        <!-- Resto de las tarjetas de los clásicos de Interpol -->
    </div>
</content>

<script>
    function playAudio(audioId) {
        var audio = document.getElementById(audioId);
        audio.play();
    }

    function pauseAudio(audioId) {
        var audio = document.getElementById(audioId);
        audio.pause();
    }
</script>

</html>

";
}
?>

