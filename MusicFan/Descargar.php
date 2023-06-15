<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <style>
    .flashcard {
      width: 100%;
      height: 150px;
      margin: 10px;
      padding: 10px;
      background-color: #e1ecf4;
      border: 1px solid #b2c7d7;
      border-radius: 5px;
      display: flex;
    }

    .flashcard img {
      width: 150px;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
      margin-right: 10px;
    }

    .flashcard-content {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .flashcard h3 {
      margin: 0;
      font-size: 18px;
      font-weight: bold;
      color: #2a648d;
    }

    .flashcard p {
      margin: 5px 0;
      font-size: 14px;
      color: #4a7ca8;
    }

    .flashcard a {
      display: inline-block;
      margin-top: 10px;
      font-weight: bold;
      color: #fff;
      background-color: #4a90e2;
      border: none;
      border-radius: 5px;
      padding: 8px 16px;
      text-decoration: none;
    }

    .flashcard a:hover {
      background-color: #2361a8;
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
                <div class='flashcard-content'>
                  <h3>".$row['Autor']."</h3>
                  <p>Canción: ".$row['Cancion']."</p>
                  <a href='".$row['Link']."' download>Download</a>
                  <form action='AñadirFavoritos.php' method='post'>
                    <input type='hidden' name='id' value='".$row['ID']."'>
                    <input type='hidden' name='autor' value='".$row['Autor']."'>
                    <input type='hidden' name='cancion' value='".$row['Cancion']."'>
                    <input type='hidden' name='link' value='".$row['Link']."'>
                    <input type='submit' value='Añadir a favoritos' class='my-btn'>
                  </form>
                </div>
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
