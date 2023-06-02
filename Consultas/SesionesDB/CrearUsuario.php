<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">        
</head>
<body>
          <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basepiratascbtis";

$user = $_POST["User"];
$nombre = $_POST["nombre"];
$contra = md5($_POST["Password"]);
$email = $_POST["Email"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Username, nombre, contraseña, Email FROM usuarios WHERE Username= '$user' OR Email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
          // Si coincide:
        $row = $result->fetch_assoc();           
            if($user == $row["Username"] || $email == $row["Email"]){
                    echo "Este usuario o email ya está registrado, inicie sesión.";
            } 
          }
            else {
        $sql = "INSERT INTO usuarios (Username, nombre, contraseña, Email) VALUES ('$user', '$nombre', '$contra', '$email')";

         if ($conn->query($sql) === TRUE) {
          echo "Usuario creado correctamente, ya puede iniciar sesión.";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
         $conn->close();

      }

            ?>
</body>
</html>