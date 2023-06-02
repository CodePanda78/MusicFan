<?php
//Manzanilla Fernandez Jania Cristal
//Walter Platón Rodriguez Emiliano
//Tah Och Angel Tonautiuh 
//Torres Ramos Alex
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";
$ID = &$_POST["ID"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM tablaintegrantes2 WHERE id= $ID";

if ($conn->query($sql) === TRUE) {
  echo "Borrado Exitosamente";
} else {
  echo "Error de borrado: " . $conn->error;
}

$conn->close();
?>