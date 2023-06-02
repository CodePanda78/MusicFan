<?php
// Start the session
//Integrantes:
//Tah Och Angel Tonautiuh 4APM
//Torres Ramos Alex
//Walter Emiliano Platon Rodriguez
// Manzanilla Fernandez Jania Cristal
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";
$user = $_POST["User"]??"";
$contra= md5($_POST["Password"]??"");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, nombre, contraseña, Email  FROM usuarios WHERE username='$user' /* AND contraseña = '$contra'*/";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    $row = $result->fetch_assoc();
    //$name= SELECT INTO tablaintegrantes2 (Nombre) ;
    if($user==$row['username'] && $contra == $row['contraseña']  ){
    $_SESSION["token"] = "SI";
    $_SESSION["nombre"] = "$row[nombre]";
    $_SESSION["usuario"] = "$row[username]";
    $_SESSION["email"] = "$row[Email]";
    echo "Sesión iniciada";
    }else{
        echo "Contraseña incorrecta";
    }
} else if ($user==""|| $contra == "d41d8cd98f00b204e9800998ecf8427e") {
    echo "Dirigete a la página de Inicio de Sesión";
}else {
    echo "El usuario no existe en la base de datos";
    //echo "Usuario y/o contraseña incorrectos";
}
$conn->close();

/*
if($User==""|| $Password == ""  ){
echo "Dirigete a la página de Inicio de Sesión";
} else if ($User == "Piratas" && $Password == "11011100") {

// Set session variables
$_SESSION["token"] = "SI";
$_SESSION["team"] = "PiratasCBTIS";
$_SESSION["member1"] = "Jania Cristal Manzanilla Fernandez";
$_SESSION["member2"] = "Walter Emiliano Platon Rodriguez";
$_SESSION["member3"] = "Angel Tonautiuh Tah Och";
$_SESSION["member4"] = "Alex Torres Ramos";
echo "Sesión iniciada";
} else {
    $_SESSION["token"] = "NO";
    echo "Usuario y/o contraseña incorrectos";
}*/
?>

</body>
</html>