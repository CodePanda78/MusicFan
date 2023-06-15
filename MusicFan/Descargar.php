<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <style>
    .flashcard {
      border: 1px solid black;
      width: 300px;
      height: 400px;
      margin: 10px;
      padding: 10px;
      display: inline-block;
    }

    .flashcard img {
      width: 150px;
      height: 150px;
    }
  </style>
</head>
<body>
  <center>

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

    $sql = "SELECT ID, Portada, Autor, Cancion, Link FROM musica";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='flashcard'>
                <img src='".$row['Portada']."' alt='Portada'>
                <p>Autor: ".$row['Autor']."</p>
                <p>Cancion: ".$row['Cancion']."</p>
                <a href='".$row['Link']."' download>Download</a>
                <form action='AñadirFavoritos.php' method='post'>
                  <input type='hidden' name='id' value='".$row['ID']."'>
                  <input type='hidden' name='autor' value='".$row['Autor']."'>
                  <input type='hidden' name='cancion' value='".$row['Cancion']."'>
                  <input type='hidden' name='link' value='".$row['Link']."'>
                  <input type='submit' value='Añadir a favoritos' class='my-btn'>
                </form>
              </div>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </center>
</body>
</html>
