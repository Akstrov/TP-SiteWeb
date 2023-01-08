<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Page d'inscription</title>
</head>
<body>
         <?php include('header.php');?>
        <div class="container">
         <?php include('left.php');?>
    <div class="main">
        <h1>Inscription</h1>
        <form id="form" action="register.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input required type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input required type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input required type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="role">Rôle:</label>
            <select class="form-control" id="role" name="role">
            <option value="1">Étudiant</option>
            <option value="2">Professeur</option>
            </select>
        </div>
        <div class="form-group">
            <label for="branche">Branche:</label>
            <select class="form-control" id="branche" name="branche">
            <option value="1">DSI</option>
            <option value="2">MI</option>
            <option value="3">CPI</option>
            <option value="4">PME/PMI</option>
            <option value="5">SE</option>
            <!-- other options-->
            </select>
        </div>
        <div class="form-group">
    <label for="mot_de_passe">Mot de passe:</label>
    <input required type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
    </div>
    <div class="form-group">
    <label for="confirm_mot_de_passe">Confirmer le mot de passe:</label>
    <input required type="password" class="form-control" id="confirm_mot_de_passe" name="confirm_mot_de_passe" required>
    </div>
    <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control" id="photo" name="photo">
    </div>
    <input id="submit" name="submit" type="submit" class="btn btn-primary" value="Enregistrer">
    <input type="reset" class="btn btn-secondary" value="Effacer">
    </form>
    </div>
    <script>
        var f = document.getElementById('form');
        f.addEventListener('submit',function(event){
            var p1 = document.getElementById('mot_de_passe').value;
            var p2 = document.getElementById('confirm_mot_de_passe').value;

            if (p1 != p2) {
                event.preventDefault();
                alert('The password and confirm password fields do not match.');
            }
        });
  </script>
</div>
</body>
</html>

