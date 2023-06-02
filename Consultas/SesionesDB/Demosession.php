<?php
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
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";    
} 

if ($_SESSION["token"] == "SI") {
// Echo session variables that were set on previous page
//echo "Nombre del equipo: " . $_SESSION["team"] . ".<br><br>";
//echo "Nombre de integrantes: <br>" . $_SESSION["member1"] . ".<br>";
echo "Sesion iniciada, estos son los datos almacenados: <br>";
echo  "Nombre: ", $_SESSION["nombre"] . ".<br>";
echo  "Nombre de usuario: " ,$_SESSION["usuario"] . ".<br>";
echo  "Correo: ", $_SESSION["email"] . ".<br>";
} else {
       // $_SESSION["token"] = "NO";
    echo "No hay sesión activa, favor de logearse en el sistema";
}
?>

</body>
</html>