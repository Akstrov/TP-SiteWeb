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