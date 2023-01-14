<?php session_start(); ?>
<header>
  <nav>
    <a href="index.php">BTS</a>
    <ul>
      <li><a href="acceuil.php">Acceuil</a></li>
      <li><a href="#">Branche</a></li>
      <li><a href="inscription.php">Inscription</a></li>
    </ul>
  </nav>
  <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) { ?>
    <span>Bienvenue, <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?></span>
    <button id="disconnect-btn">Disconnect</button>
  <?php } else { ?>
    <form action="login.php" method="post">
      <label for="Email">Email</label>
      <input type="text" id="Email" name="email" placeholder="Email">
      <label for="pwd">Password</label>
      <input type="password" id="pwd" name="pwd" placeholder="Password">
      <input type="submit" name="submit" value="Se connecter">
      <input type="reset" value="Effacer">
    </form>
  <?php } ?>
</header>
<script>
  document.getElementById('disconnect-btn').addEventListener('click', function() {
    window.location.href = 'logout.php';
  });
</script>