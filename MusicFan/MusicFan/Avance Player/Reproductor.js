window.addEventListener('load', function() {
  var audioPlayer = document.getElementById('audio-player');
  var playPauseBtn = document.getElementById('play-pause-btn');
  var backwardBtn = document.getElementById('backward-btn');
  var forwardBtn = document.getElementById('forward-btn');
  var speedBtn = document.getElementById('speed-btn');
  var progressBar = document.getElementById('progress-bar');
  var timer = document.getElementById('timer');

  playPauseBtn.addEventListener('click', function() {
    if (audioPlayer.paused) {
      audioPlayer.play();
      playPauseBtn.innerHTML = '&#10074;&#10074;'; // Pausa
    } else {
      audioPlayer.pause();
      playPauseBtn.innerHTML = '&#9658;'; // Reproducir
    }
  });

  backwardBtn.addEventListener('click', function() {
    currentSongIndex--;
    if (currentSongIndex < 0) {
        currentSongIndex = songs.length - 1;
    }
    playSong(currentSongIndex); // Canción anterior
  });

  forwardBtn.addEventListener('click', function() {
    currentSongIndex++;
    if (currentSongIndex >= songs.length) {
        currentSongIndex = 0;
    }
    playSong(currentSongIndex); // Siguiente canción
  });

  speedBtn.addEventListener('click', function() {
    if (audioPlayer.playbackRate === 1) {
      audioPlayer.playbackRate = 1.5; // Cambia a velocidad 1.5x
      speedBtn.innerHTML = '1.5x';
    } else {
      audioPlayer.playbackRate = 1; // Cambia a velocidad 1x
      speedBtn.innerHTML = '1x';
    }
  });

  audioPlayer.addEventListener('timeupdate', function() {
    var currentTime = audioPlayer.currentTime;
    var duration = audioPlayer.duration;
    var progress = (currentTime / duration) * 100;

    progressBar.value = currentTime;
    progressBar.max = duration;
    timer.textContent = formatTime(currentTime) + ' / ' + formatTime(duration);
  });

  progressBar.addEventListener('input', function() {
    var seekTime = progressBar.value;
    audioPlayer.currentTime = seekTime;
  });

  audioPlayer.addEventListener('ended', function() {
    currentSongIndex++;
    if (currentSongIndex >= songs.length) {
        currentSongIndex = 0;
    }
    playSong(currentSongIndex); // Siguiente canción
  });
  

  function formatTime(time) {
    var minutes = Math.floor(time / 60);
    var seconds = Math.floor(time % 60);
    if (seconds < 10) {
      seconds = '0' + seconds;
    }
    return minutes + ':' + seconds;
  }
});

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

document.querySelector('#play-pause-btn').addEventListener('click', function() {
    if (audioPlayer.paused) {
        audioPlayer.play();
        this.classList.remove('play');
        this.classList.add('pause');
    } else {
        audioPlayer.pause();
        this.classList.remove('pause');
        this.classList.add('play');
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


