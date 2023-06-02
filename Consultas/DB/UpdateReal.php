<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";
$Id = &$_POST["id"];
$Name = &$_POST["name"];
$Age = &$_POST["age"];
$Rol = &$_POST["rol"];
$Social = &$_POST["social"];
$Photo = &$_POST["photo"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `tablaintegrantes2` SET Nombre = '$Name', Edad = '$Age', Rol = '$Rol', RedSocial = '$Social', Foto = '$Photo'  WHERE `id` = $Id ";

if ($conn->query($sql) === TRUE) {
  echo "Actualizacion completada con exito";
} else {
  echo "Error al actualizar tu registro: " . $conn->error;
}
$conn->close();
//Integrantes:
//Tah Och Angel Tonautiuh 4APM
//Torres Ramos Alex
//Walter Emiliano Platon Rodriguez
// Manzanilla Fernandez Jania Cristal
?>