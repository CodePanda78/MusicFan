<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musicfan";
$user = $_POST["User"] ?? "";
$contra = md5($_POST["Password"] ?? "");
$email = $_POST["Correo"] ?? "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si existe el usuario
$checkUserSql = "SELECT * FROM usuariosmf WHERE Usuario = '$user' OR Email = '$email'";
$checkUserResult = $conn->query($checkUserSql);

if ($checkUserResult->num_rows > 0) {
    echo "<script> alert ('¡Advertencia: El usuario o correo electrónico ya existe!') </script>";
exit;
} else {
    // Insertar nuevo usuario
    $sql = "INSERT INTO usuariosmf (Usuario, Contraseña, Email) VALUES ('$user', '$contra', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: IniciarSesion.html");
        echo "<form action='IniciarSesion.html' method='post'>
        <input type='submit' value='Volver'>";

        $tableName = "tabla_" . $user;
        $createTableSQL = "CREATE TABLE $tableName (
            ID CHAR(2),
            Autor VARCHAR(24),
            Cancion VARCHAR(24),
            Link VARCHAR(100)
        )";

        if ($conn->query($createTableSQL) === TRUE) {
            echo "Tabla creada: $user";
        } else {
            echo "Error al crear la tabla: " . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<body>
</body>
</html>
