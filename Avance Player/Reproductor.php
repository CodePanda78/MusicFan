<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi música</title>
    <link rel="stylesheet" href="style.css">
    <script src="node.js"></script>

</head>
<body>
<?php
echo "

    <div class='container'>
        <div class='player'>
          <div class='player__controls'>
            <div class='player__btn player__btn--small' id='speed-btn'>
              <p class='fas fa-arrow-left'>1x</p>
            </div>
            <h5 class='player__title'>MUSIC FAN</h5>
            <div class='player__btn player__btn--small' id='icon-menu'>
              <p class='fas fa-bars'>&#10515;</p>
            </div>
          </div>
          <div class='player__album'>
            <img src='Portada\SpaceJunk.jpg' alt='Album cover' class='player__img' loading='lazy' />
          </div>
     
          <h2 class='player__artist'>Nombre de la Canción</h2>
          <h3 class='player__song'>Nombre del Artista</h3>
          
          <audio class='player__audio' controls id='audio-player'>
            <source src='music\Space Junk - Wang Chung.mp3' type='audio/mpeg' />
          </audio>
          <div class='timeline'>
          <input type='range' id='progress-bar' min='0' value='0'>
          <div id='timer'>0:00 / 0:00</div>
        </div>
          <div class='player__controls'>
            
            <div class='player__btn player__btn--medium' id='backward-btn'>
              <i class='fas fa-backward'>&#9668;&#9668;</i>
            </div>
     
            <div class='player__btn player__btn--medium blue play' id='play-pause-btn'>
              <i class='fas fa-play play-btn'>&#9658;</i>
              <i class='fas fa-pause pause-btn hide'></i>
            </div>
     
            <div class='player__btn player__btn--medium' id='forward-btn'>
              <i class='fas fa-forward'>&#9658;&#9658;</i>
            </div>
          </div>
        </div>
      </div>
      <script src='node.js'></script>
      ";
  ?>    
</body>
</html>