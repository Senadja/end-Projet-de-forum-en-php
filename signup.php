<?php require ('actions/users/signupAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('includes/head.php'); ?>
<!-- identer du code faire alt+shift+f  -->
<!-- dupliquer du code faire alt+shift fleche du haut ou du bas -->
<body>
  <br> <br>
  <form class="conteneur" method="post">

    <?php if (isset($errorMSG)) {
      echo '<p>' . $errorMSG . '</p>';
    } ?>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Pseudo</label>
      <input type="text" class="form-control" name="pseudo">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nom</label>
      <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Prénom</label>
      <input type="text" class="form-control" name="firstname">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="validate"> S'inscrire</button>
    <br><br>
    <a href="login.php">
      <p> Vous avez deja un compte? cliquer ici pour vous connecter</p>
    </a>
  </form>
</body>

</html>