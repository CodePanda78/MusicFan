<?php
session_start();
?>
<!DOCTYPE html>
<html>
<header>
<link rel="stylesheet" href="Demosession.css">
<?php
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {

    echo "
    <img src='Portada/User.png'> </img> <br>
    <span class='username'>$_SESSION[usuario] </span>
    <span class='email'>  $_SESSION[email] </span>
</header>
<body>
    <nav>
    <div class='Buttons2'>
        <button class='my-btn2' onclick=\'location.href='Avance Player/Reproductor.php'\'>Playlist</button>
        <button class='my-btn2' onclick=\'location.href='Biblioteca.php'\'>Biblioteca</button>
        <button class='my-btn3' onclick=\'location.href='CerrarSession.php'\'>Cerrar Sesión</button>
        </div>
    </nav>

    <div class='profile-image'>
    <img src='fotosPerfil/generic.png' alt='Profile Image'>
    <form action='upload.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='upload' accept='image/*' class='upload'>
        <input type='submit' value='Cargar imagen' name='submit'>
    </form>
</div>";

}
?>

</html>
