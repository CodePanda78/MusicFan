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

    // Verificar si se ha enviado el ID de la canción a eliminar
    if (isset($_POST["cancion_id"])) {
        $cancion_id = $_POST["cancion_id"];

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Verificar conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Ejecutar la consulta para eliminar la canción
        $sql = "DELETE FROM $tableName WHERE ID = $cancion_id";
        if ($conn->query($sql) === TRUE) {
            echo "La canción ha sido eliminada correctamente.";
        } else {
            echo "Error al eliminar la canción: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "No se ha proporcionado el ID de la canción a eliminar.";
    }
} else {
    echo "Debes iniciar sesión para acceder a la biblioteca de canciones";
}
?>