<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php'); ?>
<body>

    <br> <br>
    <form class="conteneur" method="post">
    
        <?php if(isset($errorMSG)){echo '<p>'.$errorMSG.'</p>'; } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate"> Se connecter</button>
        <br><br>
        <a href= "signup.php"><p> Vous avez pas encore de compte? cliquer ici pour vous inscrire</p></a>
    </form>

</body>
</html>