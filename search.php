<?php
session_start();
include('connect.php');
$name = $_GET['n'];
$query = "SELECT idUser, nom, prenom, photo FROM users
    WHERE (nom LIKE '$name%' OR prenom LIKE '$name%') AND idUser != " . $_SESSION['id'] . "
    AND (idUser NOT IN (SELECT des FROM invitations WHERE exp = " . $_SESSION['id'] . ") 
    AND idUser NOT IN (SELECT exp FROM invitations WHERE des =" . $_SESSION['id'] . "))
    ";
$result = mysqli_query($conn, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$json = json_encode($data);
echo $json;
