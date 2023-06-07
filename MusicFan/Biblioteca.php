<?php
session_start();

if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "musicfan";

    // Obtén el nombre de la tabla del usuario actual
    $usuario = $_SESSION["usuario"] ?? "";
    $tableName = "tabla_" . $usuario;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtener las canciones favoritas del usuario en cuestión
    $sql = "SELECT ID, Autor, Cancion, Link FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar las canciones en tabla (modificar con css)
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Cancion</th>
                    <th>Link</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['ID']."</td>
                    <td>".$row['Autor']."</td>
                    <td>".$row['Cancion']."</td>
                    <td><a href='".$row['Link']."' download>". "Download"."</a></td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No tienes canciones favoritas en tu biblioteca";
    }

    $conn->close();
} else {
    echo "Debes iniciar sesión para acceder a la biblioteca de canciones";
}
?>

