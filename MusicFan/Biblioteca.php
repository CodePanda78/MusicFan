<html>
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
   Biblioteca
   <nav>
   <div class='Buttons2'>
        <button class='my-btn2' onclick="location.href='Menú principal.php'">Volver</button>
</div>
    </nav>
</header>
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
        // Mostrar las canciones como lista (modificar con CSS)
        echo "
        <body>
        <link rel='stylesheet' href='Biblioteca.css'>
        </body>
        <ul class='song-list'>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>
                    <h3>".$row['Autor']."</h3>
                    <p>".$row['Cancion']."</p>
                    <form action='BorrarFavoritos.php' method='post'>
                        <input type='hidden' name='cancion_id' value='".$row['ID']."'>
                        <input type='submit' value='Borrar' class='my-btn'>
                    </form>
                </li>";
        }
        echo "</ul>";
    } else {
        echo "No tienes canciones favoritas en tu biblioteca";
    }

    $conn->close();
} else {
    echo "Debes iniciar sesión para acceder a la biblioteca de canciones";
}
?>
</html>