<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="Demosession.css">
<?php
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {

    echo "
    <html>
    <header>
    <img src='Portada/User.png'> </img> <br>
    <span class='username'>" . $_SESSION["usuario"] . "</span>
    <span class='email'>" . $_SESSION["email"] . "</span>
</header>
    <nav>
    <div class='Buttons2'>
        <button class='my-btn2' onclick=\"location.href='Avance Player/Reproductor.php'\">Playlist</button>
        <button class='my-btn2' onclick=\"location.href='Biblioteca.php'\">Biblioteca</button>
        <button class='my-btn3' onclick=\"location.href='CerrarSession.php'\">Cerrar Sesión</button>
        </div>
    </nav>
    </html>";
} else {
    echo "No hay sesión activa, favor de iniciar sesión en el sistema";
}
?>

</body>
</html>
