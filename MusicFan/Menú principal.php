<?php
session_start();

if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='Menu.css'>
    </head>
    <body>
        <header>
            <m>M</m>usic <f>F</f>an 
            <div class='desplegable-container'>
                <button class='desplegable-btn'>User</button>
                <div class='desplegable-content'>
                    <a href='Demosession.php'>Yo</a>
                    <a href='Biblioteca.php'>Biblioteca</a>
                    <a href='CerrarSession.php'>Cerrar sesión</a>
                </div>
            </div>
        </header>
        <nav>
            <div class='Buttons'>
                <button class='my-btn' onclick=location.href='Descargar.php'>Descargas</button>
                <div class='dropdown-container'>
                    <button class='my-btn2'>Género</button>
                    <div class='dropdown-content'>
                        <a href='rock.html'>Rock</a> <br>
                        <a href='Indie.html'>Indie</a> <br>
                        <a href='pop.html'>Underground</a> <br>
                        <a href='pop.html'>Latino</a> <br>
                    </div>
                </div>
            </div>
        </nav>
        <p> Musica2</p>
    </body>
    </html>";
} else {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='Menu.css'>
    </head>
    <body>
        <script>alert('Estás entrando como invitado');</script>
        <header>
            <m>M</m>usic <f>F</f>an 
            <div class='dropdown-container'>
                <button class='dropdown-btn'>User</button>
                <div class='dropdown-content'>
                    <a href='Demosession.php'>Yo</a>
                    <a href='Biblioteca.php'>Biblioteca</a>
                    <a href='IniciarSesion.html'>Iniciar Sesión</a>
                    <a href='CerrarSession.php'>Cerrar sesión</a>
                </div>
            </div>
        </header>
        <nav>
            <div class='Buttons'>
                <button class='my-btn' onclick=location.href='Descargar.php'>Descargas</button>
                <div class='dropdown-container'>
                    <button class='my-btn2'>Género</button>
                    <div class='dropdown-content'>
                        <a href='rock.html'>Rock</a> <br>
                        <a href='Indie.html'>Indie</a> <br>
                        <a href='pop.html'>Underground</a> <br>
                        <a href='pop.html'>Latino</a> <br>
                    </div>
                </div>
            </div>
        </nav>
    </body>
    </html>";
}
?>

