<html>
<head>
    <meta charset="UTF-8">
    <title>Mi música</title>
    <link rel="stylesheet" href="Reproductor.css">
</head>
<body>
<?php
session_start();

if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "musicfan";

    // Obtén el nombre de la tabla del usuario actual
    $usuario = $_SESSION["usuario"] ?? "";
    $tableName = "tabla_" . $usuario;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtener las canciones favoritas del usuario
    $sql = "SELECT ID, Autor, Cancion, Link FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        $songs = [];
        while ($row = $result->fetch_assoc()) {
            $songs[] = [
                'id' => $row['ID'],
                'author' => $row['Autor'],
                'name' => $row['Cancion'],
                'link' => "../$row[Link]"//,
              //  'portada' => "../$row[Portada]"
            ];
        }

        $currentSongIndex = 0;
        $currentSong = $songs[$currentSongIndex];
        $totalSongs = count($songs);

        echo "
        <div class='container'>
            <div class='player'>
                <div class='player__controls'>
                    <div class='player__btn player__btn--small' id='speed-btn'>1x</div>
                    <h5 class='player__title'>MUSIC FAN</h5>
                    <a class='player__btn player__btn--small' id='icon-menu' href='{$currentSong['link']}' download>
                        <p class='fas fa-bars'>&#10515;</p>
                    </a>
                </div>
                <div class='player__album'>
                    <img src='imagen.gif' alt='Album cover' class='player__img' loading='lazy' />
                </div>
                <h2 class='player__artist'>{$currentSong['name']}</h2>
                <h3 class='player__song'>{$currentSong['author']}</h3>
                <div class='timeline'>
                    <input type='range' id='progress-bar' min='0' value='0'>
                    <div id='timer'>0:00 / 0:00</div>
                </div>
                <audio class='player__audio' controls id='audio-player'>
                    <source src='{$currentSong['link']}' type='audio/mpeg' />
                </audio>
                <div class='player__controls'>
                    <div id='backward-btn' class='player__btn player__btn--medium'>&#9668;&#9668;</div>
                    <div id='play-pause-btn' class='player__btn player__btn--medium blue play'>&#9658;</div>
                    <div id='forward-btn' class='player__btn player__btn--medium'>&#9658;&#9658;</div>
                </div>
            </div>
        </div>
        <script src = 'Reproductor.js'> </script>
        <script>
        
            var songs = " . json_encode($songs) . ";
            var currentSongIndex = $currentSongIndex;
            var audioPlayer = document.getElementById('audio-player');

            function playSong(index) {
                var song = songs[index];
                audioPlayer.src = song.link;
                audioPlayer.load();
                audioPlayer.play();
                document.querySelector('.player__artist').textContent = song.name;
                document.querySelector('.player__song').textContent = song.author;
                document.querySelector('#icon-menu').href = song.link;
            }

              playPauseBtn.addEventListener('click', function() {
    if (audioPlayer.paused) {
      audioPlayer.play();
      playPauseBtn.innerHTML = '&#10074;&#10074;'; // Pausa
    } else {
      audioPlayer.pause();
      playPauseBtn.innerHTML = '&#9658;'; // Reproducir
    }
  });

            document.querySelector('#forward-btn').addEventListener('click', function() {
                currentSongIndex++;
                if (currentSongIndex >= songs.length) {
                    currentSongIndex = 0;
                }
                playSong(currentSongIndex);
            });

            document.querySelector('#backward-btn').addEventListener('click', function() {
                currentSongIndex--;
                if (currentSongIndex < 0) {
                    currentSongIndex = songs.length - 1;
                }
                playSong(currentSongIndex);
            });
        </script>
        ";
    } else {
        echo "No tienes canciones favoritas en tu biblioteca";
    }

    $conn->close();
} else {
    echo "Debes iniciar sesión para acceder a esta página";
}
?>
</body>
</html>