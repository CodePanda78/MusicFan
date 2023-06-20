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
        .alert {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<header>
    Descargas
</header>
<nav>
<div class='Buttons2'>
        <button class='my-btn2' onclick="location.href='Menú principal.php'">Volver</button>
</div>
</nav>
<body>
  <center>

    <?php
    session_start();

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

    <?php if (isset($_SESSION["alerta"])): ?>
        <script>
            alert("<?php echo $_SESSION["alerta"]; ?>");
        </script>
        <?php
        unset($_SESSION["alerta"]);
    endif;
    ?>
  </center>

</body>
</html>
