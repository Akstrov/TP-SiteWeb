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
            <h1>Message Recue</h1>
            <table class="my-table">
                <?php
                include('connect.php');
                $req = "select * from messages where (exp = " . $_GET['id'] . " and des = " . $_SESSION['id'] . ") order by dateEnvoie";
                $res = mysqli_query($conn, $req);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr><td><p style='text-align:left; background-color:darkcyan'>" . $row['message'] . "</p></td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>