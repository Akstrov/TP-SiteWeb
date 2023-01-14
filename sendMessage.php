<?php
session_start();
include('connect.php');
$sql = "insert into messages(exp,des,message) values(" . $_SESSION['id'] . "," . $_POST['des'] . ",'" . $_POST['message'] . "')";
mysqli_query($conn, $sql);
