<?php
session_start();
include('connect.php');
$name = $_GET['n'];
$sql = "SELECT u.idUser, u.nom, u.prenom, u.photo FROM users u
JOIN amis a ON (u.idUser = a.idUser1 AND a.idUser2 = " . $_SESSION['id'] . ")
 OR (u.idUser = a.idUser2 AND a.idUser1 = " . $_SESSION['id'] . ")
WHERE u.nom LIKE '" . $name . "%' OR u.prenom LIKE '" . $name . "%';";
$result = mysqli_query($conn, $sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$json = json_encode($data);
echo $json;
