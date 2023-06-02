<?php
//Integrantes:
//Tah Och Angel Tonautiuh 4APM
//Torres Ramos Alex
//Walter Emiliano Platon Rodriguez
// Manzanilla Fernandez Jania Cristal

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "Se ha borrado la sesión";
$_SESSION["token"] = "NO";
?>

</body>
</html>