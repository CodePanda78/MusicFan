<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi música</title>
    <link rel="stylesheet" href="style.css">
    <script src="node.js"></script>
<link rel="stylesheet" href="Reproductor.css">
</head>
<body>
<?php
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
            <img src='Portada\SpaceJunk.jpg' alt='Album cover' class='player__img' loading='lazy' />
          </div>
     
          <h2 class='player__artist'>Nombre de la Canción</h2>
          <h3 class='player__song'>Nombre del Artista</h3>
     
          <audio class='player__audio' controls id='audio'>
            <source src='music\Space Junk - Wang Chung.mp3' type='audio/mpeg' />
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
  ?>    
</body>
</html>