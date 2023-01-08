<?php
    include('connect.php');
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $branche = $_POST['branche'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $ddN = $_POST['date_naissance'];
        $mdp = password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT);
        $cmdp = $_POST['confirm_mot_de_passe'];
        if(is_uploaded_file($_FILES['photo']['tmp_name'])){
            $photo = 'uploads/' .$_FILES['photo']['name'];
            move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
        }else{
            $photo = 'uploads/default.jpg';
        }

        $query = "insert into users(nom,prenom,branche,email,role,ddN,mdp,photo) values('$nom','$prenom',$branche,'$email',$role,'$ddN','$mdp','$photo');";
        mysqli_query($conn,$query);
    }
    header('location:acceuil.php');
?>