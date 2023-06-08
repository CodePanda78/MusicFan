<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <meta charset="UTF-8">
  <title>Mi música</title>
  <link rel="stylesheet" href="style.css">
  <script src="node.js"></script>

</head>
<body>
  
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "musicfan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ID, Portada, Autor, Cancion, Link FROM musica WHERE ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      echo "
    <div class='container'>
        <div class='player'>
          <div class='player__controls'>
            <div class='player__btn player__btn--small' id='previous'>
              <i class='fas fa-arrow-left'></i>
            </div>
            <h5 class='player__title'>MUSIC FAN</h5>
            <div class='player__btn player__btn--small' id='icon-menu'>
              <i class='fas fa-bars'></i>
            </div>
          </div>
          <div class='player__album'>
            <img src='imagen.png' alt='Album cover' class='player__img' loading='lazy' />
          </div>
     
          <h2 class='player__artist'>Nombre de la Canción</h2>
          <h3 class='player__song'>Nombre del Artista</h3>
     
          <input type='range' value='00' min='0' class='player__level' id='range' />
          <div class='audio-duration'>
            <div class='start'>00:01</div>
            <div class='end'>04:30</div>
          </div>
     
          <audio class='player__audio' controls id='audio'>
            <source src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Leo%20-%20Trying.mp3' type='audio/mpeg' />
          </audio>
     
          <div class='player__controls'>
            <div class='player__btn player__btn--medium' id='backward'>
              <i class='fas fa-backward'></i>
            </div>
     
            <div class='player__btn player__btn--medium blue play' id='play'>
              <i class='fas fa-play play-btn'></i>
              <i class='fas fa-pause pause-btn hide'></i>
            </div>
     
            <div class='player__btn player__btn--medium' id='forward'>
              <i class='fas fa-forward'></i>
            </div>
          </div>
        </div>
      </div>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  
</body>
</html>