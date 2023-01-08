<?php
    session_start();
    include('connect.php');
    $exp = $_SESSION['id'];
    $des = $_GET['id'];
    $req = "insert into invitations (exp,des,etat) values ($exp,$des,'en attend')";
    mysqli_query($conn, $req);
    if(mysqli_errno($conn) == 0){
        header('location:recherche.php');
    }else{
        echo "Error: ".mysqli_error($conn);
    }
?>