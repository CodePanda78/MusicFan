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

$sql = "INSERT INTO tablaintegrantes2 (id, Nombre, Edad, Rol, RedSocial, foto) VALUES ($Id, '$Name', $Age, '$Rol', 
'$Social', '$Photo')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado con éxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

//Integrantes:
//Manzanilla Fernandez Jania Cristal
//Tah Och Angel Tonautiuh 4APM
//Torres Ramos Alex
//Walter Emiliano Platon Rodriguez

?>