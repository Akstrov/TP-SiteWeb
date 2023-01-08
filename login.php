<?php
    session_start();
    include('connect.php');
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $query = "select idUser,mdp from users where email='$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $hash = $row['mdp'];
    $id = $row['idUser'];
    if(password_verify($pwd,$hash)){
        $query = 'select nom,prenom,nomBranche,email,nomRole,ddN,mdp,photo from users u,branches b ,roles r where idUser = ' . $id.' and branche = idBranche and role = idRole';
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($res);
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $branche = $row['nomBranche'];
        $email = $row['email'];
        $role = $row['nomRole'];
        $ddN = $row['ddN'];
        $mdp = $row['mdp'];
        $photo = $row['photo'];

        $_SESSION['id'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['branche'] = $branche;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
        $_SESSION['ddN'] = $ddN;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['photo'] = $photo;
        header('location:acceuil.php');
    }else{
        echo 'erreur';
    }
?>