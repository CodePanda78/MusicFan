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

$sql = "SELECT id, Nombre, Edad, Rol, RedSocial, Foto FROM tablaintegrantes2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["Nombre"]. " " . " - Edad: " . $row["Edad"]. " - Rol: " . $row["Rol"]. " - Red Social: " . $row["RedSocial"]. " - Foto: " . $row["Foto"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();

//Integrantes:
//Tah Och Angel Tonautiuh 4APM
//Torres Ramos Alex
//Walter Emiliano Platon Rodriguez
// Manzanilla Fernandez Jania Cristal

?>