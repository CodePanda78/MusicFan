<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tablaintegrantes2 (id, Nombre, Edad, Rol, RedSocial, foto) VALUES (5, 'Juan Carlos Bodoque', '23', 'Area Comica', 'https://www.facebook.com/31minutosoficial/?locale=es_LA', 'Bodoque.png')";

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