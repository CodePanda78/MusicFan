<!DOCTYPE html>
<html>
<head>
  <title>Piratas del CBTIS</title>
  <style>
    table, th, td {
      border: 1px solid black;
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

    $sql = "SELECT ID, Autor, Cancion, Link FROM musica";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of each row
      echo "<table>
              <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Cancion</th>
                <th>Link</th>
                <th></th>
              </tr>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['ID']."</td>
                <td>".$row['Autor']."</td>
                <td>".$row['Cancion']."</td>
                <td><a href='".$row['Link']."' download>". "Download"."</a></td>
                <td>
                  <form action='AñadirFavoritos.php' method='post'>
                    <input type='hidden' name='id' value='".$row['ID']."'>
                    <input type='hidden' name='autor' value='".$row['Autor']."'>
                    <input type='hidden' name='cancion' value='".$row['Cancion']."'>
                    <input type='hidden' name='link' value='".$row['Link']."'>
                    <input type='submit' value='Añadir a favoritos' class='my-btn'>
                  </form>
                </td>
              </tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </center>
</body>
</html>


