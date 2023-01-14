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
            <h1>Message</h1>
            <table class="my-table">
                <?php
                include('connect.php');
                $req = "select * from messages where (exp = " . $_GET['id'] . " and des = " . $_SESSION['id'] . ") or (exp = " . $_SESSION['id'] . " and des = " . $_GET['id'] . ") order by dateEnvoie";
                $res = mysqli_query($conn, $req);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr><td><p ";
                    if ($row['exp'] == $_SESSION['id']) {
                        echo "style='text-align:right; background-color:lightgrey'";
                    } else {
                        echo "style='text-align:left; background-color:lightblue'";
                    }
                    echo ">" . $row['message'] . "</p></td></tr>";
                }
                ?>
            </table>
            <form method="post" action="sendMessage.php">
                <input type="hidden" name="des" value="<?php echo ($_GET['id']); ?>">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Message ..." class="form-control"></textarea>
                <input type="submit" value="envoyer">
            </form>
        </div>
    </div>
</body>

</html>