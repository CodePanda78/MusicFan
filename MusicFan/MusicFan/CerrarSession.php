<?php
session_start();

session_unset();

header("Location: Menú Principal.php");
exit;
?>