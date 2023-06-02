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
    echo "<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='Menu.css'>
</head>
<header> <m>M</m>usic <f>F</f>an 
<div class='dropdown-container'>
    <button class='dropdown-btn'>User</button>
    <div class='dropdown-content'>
        <a href='Demosession.php'>Yo</a>
        <a href='Bibioteca.html'>Biblioteca</a>
        <a href='CerrarSession.php'>Cerrar sesion</a>
    </div>
</div>
</header>
<nav>
<!--Botón 1-->
<div class='Buttons'>
<button class='my-btn'  onclick=location.href='Descargar.php'>Descargas</button>
 <!--Botón 2 desplegable-->
<div class='dropdown-container'>
    <button class='my-btn2'>Genero</button>
    <div class='dropdown-content'>
<a href='rock.html'>Rock</a> <br>
<a href='Indie.html'>Indie</a> <br>
<a href='pop.html'>Undergorund</a> <br>
<a href='pop.html'>Latino</a> <br>

</div>
</div>

<!--Content-->
</div>";
} else {
    echo "<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='Menu.css'>
</head>
<header> <m>M</m>usic <f>F</f>an 
<div class='dropdown-container'>
    <button class='dropdown-btn'>User</button>
    <div class='dropdown-content'>
        <a href='Demosession.php'>Yo</a>
        <a href='Bibioteca.html'>Biblioteca</a>
        <a href='CerrarSession.php'>Cerrar sesion</a>
    </div>
</div>
</header>
<nav>
<!--Botón 1-->
<div class='Buttons'>
<button class='my-btn'  onclick=location.href='Descargar.php'>Descargas</button>
 <!--Botón 2 desplegable-->
<div class='dropdown-container'>
    <button class='my-btn2'>Genero</button>
    <div class='dropdown-content'>
<a href='rock.html'>Rock</a> <br>
<a href='Indie.html'>Indie</a> <br>
<a href='pop.html'>Undergorund</a> <br>
<a href='pop.html'>Latino</a> <br>

</div>
</div>

<!--Content-->
</div>";
}
?>

