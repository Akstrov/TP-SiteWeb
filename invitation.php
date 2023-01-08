<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <?php include('leftUser.php'); ?>
        <div class="main">
            <h1>Invitations</h1>
            <div id="invites">
                <table>
                <?php
                    $id = $_SESSION['id'];
                    $req = "select idUser,photo,nom,prenom from users,invitations where idUser = exp and des = ".$id." and etat = 'en attend'";
                    $result = mysqli_query($conn,$req);
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr><td><img width='200px' height='200px' src=".$row['photo']."></td><td>".$row['nom']." ".$row['prenom']."</td><td><a href='accept.php?id=".$row['idUser']."'>Accept </a></td><td><a href ='refuse.php?id=".$row['idUser']."'>Refus</a></td></tr>";
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>