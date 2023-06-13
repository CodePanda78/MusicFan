<html>
<head>
    <meta charset="UTF-8">
    <title>Mi música</title>
    <link rel="stylesheet" href="style.css">
   

</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musicfan";
$idSong=2;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Portada, Autor, Cancion, Link FROM musica WHERE ID = $idSong ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
  $portadaSong = "../$row[Portada]";
  $nameSong= $row['Cancion'];
  $autorSong= $row['Autor'];
  $linkSong= "../$row[Link]";//

echo "

    <div class='container'>
        <div class='player'>
          <div class='player__controls'>
            <div class='player__btn player__btn--small' id='speed-btn'>1x</div>

            <h5 class='player__title'>MUSIC FAN</h5>
            <a class='player__btn player__btn--small' id='icon-menu' href='$linkSong' download>
   
              <p class='fas fa-bars'>&#10515;</p>
            </a>
          </div>
          <div class='player__album'>
            <img src='$portadaSong' alt='Album cover' class='player__img' loading='lazy' />
          </div>
     
          <h2 class='player__artist'>$nameSong</h2>
          <h3 class='player__song'>$autorSong</h3>
          <div class='timeline'>
          <input type='range' id='progress-bar' min='0' value='0'>
          <div id='timer'>0:00 / 0:00</div>
        </div>
          <audio class='player__audio' controls id='audio-player'>
            <source src='$linkSong' type='audio/mpeg' />
          </audio>
          
          <div class='player__controls'>
     
            <div id='backward-btn' class='player__btn player__btn--medium'>&#9668;&#9668;</div>

            <div id='play-pause-btn' class='player__btn player__btn--medium blue play'>&#9658;</div>

            <div id='forward-btn' class='player__btn player__btn--medium'>&#9658;&#9658;</div>

          </div>
        </div>
      </div>
      <script src='Reproductor.js'></script>
      ";
 } 
  } else {
      echo "Ups ha ocurrido un error :(";
    }
    $conn->close();
    ?>   
</body>
</html>