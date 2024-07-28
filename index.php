<?php
// require('actions/users/securityAction.php'); 
require('actions/questions/showAllQuestionsActions.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if (!isset($_SESSION['auth'])) {
//     header('Location: login.php');
//     exit();
// }
?>
<!DOCTYPE html>
<html lang=en>
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/navbar.php'); ?>
        <br><br>

        <div class="container">

            <form method="GET">
                <div class="form-group row">
                    
                    <div class="col-8">
                        <input type="search" name="search" class="form-control">
                    </div>

                    <div class="col-4">
                        <button class="btn btn-success" type="submit">Rechercher</button>
                    </div>

                </div>
            </form>
            <br>
            
            <?php
                while($question = $getAllQuestions->fetch()){
                    ?>
                    <div class="card">
                     <div class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>" >
                            <?= $question['titre']; ?>
                        </a>
                     </div>
                     <div class="card-body">
                         <?= $question['description']; ?>   
                     </div>
                     <div class="card-footer">
                         publiée par  Publiée par <a href="profile.php?id=<?= $question['id_author']; ?>"><?= $question['pseudo_author']; ?></a> le <?= $question['date_publication']; ?> 
                     </div>
                    </div>
                    <br>
                    <?php
                }
            ?>
        <div>   
    </body>
</html>