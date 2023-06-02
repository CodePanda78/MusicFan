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
$User = $_POST["User"]??"";
$Password = $_POST["Password"]??"";
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
}
?>

</body>
</html>