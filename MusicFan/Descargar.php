<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <style>
    .flashcard {
      width: 300px;
      height: 400px;
      margin: 10px;
      padding: 10px;
      background-color: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: inline-block;
      overflow: hidden;
    }

    .flashcard img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    .flashcard-content {
      padding: 10px;
    }

    .flashcard h3 {
      margin: 0;
      font-size: 18px;
      font-weight: bold;
    }

    .flashcard p {
      margin: 5px 0;
      font-size: 14px;
    }

    .flashcard a {
      display: block;
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      padding: 8px 16px;
      text-decoration: none;
    }

    .flashcard a:hover {
      background-color: #45a049;
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
