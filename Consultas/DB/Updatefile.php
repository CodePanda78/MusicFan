
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";
$Id = $_POST["ID"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Nombre, Edad, Rol, RedSocial, Foto FROM tablaintegrantes2 WHERE id=$Id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    $row = $result->fetch_assoc();
    //$name= SELECT INTO tablaintegrantes2 (Nombre) ;
    echo " <b>Id: $Id</b><br><br> <form action='UpdateReal.php' method='post'> 
    <input type = 'hidden' name='id' value=$Id>
    Nombre: <input type = 'text' name='name' value='$row[Nombre]'> <br> </br>
    Edad: <input type = 'text' name='age' value='$row[Edad]'> <br> </br>
    Rol: <input type = 'text' name='rol' value='$row[Rol]'> <br> </br>
    Red Social: <input type = 'text' name='social' value='$row[RedSocial]'> <br> </br>
    Foto: <input type = 'text' name='photo' value='$row[Foto]'> <br> </br>
     <input type='submit' value='Actualizar'>
 </form>";
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