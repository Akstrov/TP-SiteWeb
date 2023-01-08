<?php
    session_start();
    include('connect.php');
    $id = $_SESSION['id'];
    $exp = $_GET['id'];
    $req = "update invitations set etat = 'refus' where exp = '$exp' and des = '$id'";
    mysqli_query($conn, $req);
    if(mysqli_errno($conn)==0){
        header('location:invitation.php');
    }else{
        echo 'error refusing invitation';
    }
?>