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
$user = $_POST["User"]??"";
$contra= md5($_POST["Password"]??"");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Usuario, Contraseña, Email  FROM usuariosmf WHERE Usuario='$user' /* AND contraseña = '$contra'*/";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($user==$row['Usuario'] && $contra == $row['Contraseña']  ){
    $_SESSION["token"] = "SI";
    $_SESSION["usuario"] = "$row[Usuario]";
    $_SESSION["email"] = "$row[Email]";
    header("Location: Menú principal.php");
    exit;
    }else{
        echo "Contraseña incorrecta";
    }
} else if ($user==""|| $contra == "") {
    header("Location: Menú principal.php");
}else {
    echo "El usuario no existe en la base de datos";
}
$conn->close();
?>

</body>
</html>