<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
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

$sql = "INSERT INTO usuariosmf (Usuario, Contraseña, Email) VALUES ('$user', '$contra', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado";
    echo "<br>";
    echo "Vuelve al login";
    echo "<br>";
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

$conn->close();
?>

</body>
</html>
