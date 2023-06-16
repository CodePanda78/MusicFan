<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <link rel='stylesheet' href='Descargar.css'>
</head>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='Menu.css'>
    <style>
        .container {
            text-align: center;
        }

        .imagenes {
            display: inline-block;
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<header>
    Descargas
</header>
<nav>
        <!-- Botón 2 desplegable -->
        <div class='dropdown-container2'>
            <button class='my-btn2'>Género</button>
            <div class='dropdown-content2'>
                <a href='rock.html'>Rock</a> <br>
                <a href='Indie.html'>Indie</a> <br>
                <a href='pop.html'>Undergorund</a> <br>
                <a href='pop.html'>Latino</a> <br>
            </div>
        </div>
    </div>
</nav>
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
                <p>Canción: ".$row['Cancion']."</p>
                  <h3>".$row['Autor']."</h3>
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