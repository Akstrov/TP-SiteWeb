<?php
    session_start();
    include('connect.php');
    $id = $_SESSION['id'];
    $exp = $_GET['id'];
    $req = "update invitations set etat = 'accept' where exp = '$exp' and des = '$id'";
    mysqli_query($conn, $req);
    $req = "insert into amis(idUser1,idUser2) values($id,$exp)";
    mysqli_query($conn, $req);
    if(mysqli_errno($conn)==0){
        header('location:invitation.php');
    }else{
        echo 'error accepting invitation';
    }
?>