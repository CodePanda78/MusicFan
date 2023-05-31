<!DOCTYPE html>
<html>
<head>
    <title>Descargar música</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Este es un apartado donde puedes descargar música</h1>
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "musicfan";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Autor, Cancion, Link FROM rock";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Autor</th>
                        <th>Canción</th>
                        <th>Link</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["Autor"] . "</td>
                        <td>" . $row["Cancion"] . "</td>
                        <td><a href='" . $row["Link"] . "' target='_blank' rel='noopener noreferrer'>" . "Descargar" ."</a></td>
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
