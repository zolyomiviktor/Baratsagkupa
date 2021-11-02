<?php
session_start();
session_unset($_SESSION['felhasznalonev']);
session_destroy();
header('Location:belepes.php');
?>