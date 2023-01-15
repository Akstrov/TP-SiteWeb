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
            <h1>Messages recue</h1>
            <table>
                <?php
                $sql = "SELECT idUser, photo, nom, prenom, (SELECT COUNT(id) FROM messages WHERE exp = " . $_SESSION['id'] . " AND des = users.idUser) AS num \n"
                    . "FROM users \n"

                    . "JOIN amis \n"

                    . "ON (idUser = idUser1 AND idUser2 = " . $_SESSION['id'] . ") OR (idUser = idUser2 AND idUser1 = " . $_SESSION['id'] . ") having num >0;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td><img width='200px' height='200px' src=" . $row['photo'] . "></td><td>Tu as envoyer " . $row['num'] . " messages a " . $row['nom'] . " " . $row['prenom'] . "</td><td><a href='messageEnvoyerById.php?id=" . $row['idUser'] . "'>Message </a></td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>