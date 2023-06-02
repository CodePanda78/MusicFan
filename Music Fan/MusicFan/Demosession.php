<?php
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

    echo "Sesión iniciada, estos son los datos almacenados: <br>";
    echo "Nombre de usuario: " . $_SESSION["usuario"] . "<br>";
    echo "Correo: " . $_SESSION["email"] . "<br>";
} else {
    echo "No hay sesión activa, favor de iniciar sesión en el sistema";
}
?>

</body>

<body>
<h1> Mi Biblioteca </h1>
    <h2> Musica </h2>
</body>
</html>
