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
    echo "<script> 
            alert('¡Advertencia: El usuario o correo electrónico ya existe!');
            window.location.href = 'IniciarSesion.html';
          </script>";
} else {
    // Insertar nuevo usuario
    $sql = "INSERT INTO usuariosmf (Usuario, Contraseña, Email) VALUES ('$user', '$contra', '$email')";

    if ($conn->query($sql) === TRUE) {
        $tableName = "tabla_" . $user;
        $createTableSQL = "CREATE TABLE $tableName (
            ID INT(11) AUTO_INCREMENT PRIMARY KEY,
            Autor VARCHAR(50),
            Cancion VARCHAR(50),
            Link VARCHAR(255),
            profile_image VARCHAR(255)
        )";

        if ($conn->query($createTableSQL) === TRUE) {
            echo "<script> 
                    alert('¡El usuario se ha registrado exitosamente!');
                    window.location.href = 'IniciarSesion.html';
                  </script>";
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

