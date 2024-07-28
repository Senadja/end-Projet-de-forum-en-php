<?php include 'includes/head.php'; 
    require('actions/users/securityAction.php');
    require('actions/questions/myQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="container">
        <?php 
                while($question = $getAllMyQuestions->fetch()){
                    ?>
                    <div class="card">
                         <h5 class="card-header">
                         <a href="article.php?id=<?= $question['id']; ?>" >
                            <?= $question['titre']; ?>
                        </a>
                        </h5>
                         <div class="card-body">
                                <p class="card-text">
                                    <?= $question['description']; ?>
                                </p>
                                <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accerder a la question</a>
                                <a href="edit-questions.php?id=<?= $question['id'] ?>" class="btn btn-warning">Modifier la question </a>
                                <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette question ?');">Supprimer la question</a>
                         </div>
                    </div>
                    <br>
                    <?php
                 }
         ?>
    <div>     
</body>
</html>