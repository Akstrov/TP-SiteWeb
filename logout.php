<?php
session_start();
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['branche']);
unset($_SESSION['email']);
unset($_SESSION['role']);
unset($_SESSION['ddN']);
unset($_SESSION['mpd']);
unset($_SESSION['photo']);
header('Location: index.php');
?>