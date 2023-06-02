-<!DOCTYPE html>
<center> <h1> Piratas del CBTIS </h1> 

<style>
  table, th, td {
    border: 1px solid black;
  }
</style>

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

$sql = "SELECT id, Nombre, Edad, Rol, RedSocial, Foto FROM tablaintegrantes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table> <tr></tr>
  <th> id </th>
  <th> Nombre </th>
  <th> Edad </th>
  <th> Rol </th>
  <th> RedSocial </th>
  <th> Foto </th>";
  while($row = $result->fetch_assoc()) {
 echo "<tr>
 <td> $row[id] </td>
 <td> $row[Nombre] </td>
 <td> $row[Edad] </td>
 <td> $row[Rol] </td>
 <td> <a href=$row[RedSocial] target='_blank' rel='noopener noreferrer'>$row[Nombre]</a></td>
 <td> <img src=$row[Foto] width='150' height='150'> </td>";
  }
  echo "</table>";
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


</center>
</html>
