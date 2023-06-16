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

    // Obtener datos
    $ID = $_POST["id"] ?? "";
    $autor = $_POST["autor"] ?? "";
    $cancion = $_POST["cancion"] ?? "";
    $link = $_POST["link"] ?? "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connections
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Obtener el nombre de la tabla del usuario actual
    $usuario = $_SESSION["usuario"] ?? "";
    $tableName = "tabla_" . $usuario;

    // Escapar caracteres especiales en la ruta de la canción
    $link = mysqli_real_escape_string($conn, $link);

    // Validar si la canción ya está agregada a favoritos
    $checkSQL = "SELECT ID FROM $tableName WHERE ID='$ID'";
    $checkResult = $conn->query($checkSQL);

    if ($checkResult->num_rows > 0) {
        echo "<script> alert('La canción ya está añadida a favoritos')</script>";
        header("Location: Descargar.php");
        
    } else {
        // Insertar canción a favoritos
        $insertSQL = "INSERT INTO $tableName (ID, Autor, Cancion, Link) VALUES ('$ID', '$autor', '$cancion', '$link')";

        if ($conn->query($insertSQL) === TRUE) {
            header("Location: Descargar.php");
        } else {
            echo "Error al agregar la canción a favoritos: " . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "Debes iniciar sesión para agregar a favoritos";
}

?>