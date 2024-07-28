<?php 
require ('actions/questions/showArticleContentAction.php');
require ('actions/questions/postAnswerAction.php');
require ('actions/questions/showAllAnswersOfQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h3 {
            color: #343a40;
            font-size: 2em;
            margin-bottom: 20px;
        }
        p {
            color: #343a40;
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        small {
            display: block;
            color: #343a40;
            margin-top: 20px;
        }
        hr {
            border: none;
            height: 1px;
            background-color: #000000;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="container">
        <?php 
        if(isset($errorMsg)) { echo "<p class='text-danger'>$errorMsg</p>"; }
        if(isset($successMsg)) { echo "<p class='text-success'>$successMsg</p>"; }
        if(isset($questionPublicationDate)) {
            ?>
            <section class="show-content">
            <h3><?= $questionTitle; ?></h3>
            <hr>
            <p><?= $questiondescription; ?></p>
            <hr>
            <p><?= $questionContent; ?></p>
            <hr>
            <small>Publié le <?= $questionPublicationDate . " par " . "<a href='profile.php?id=$questionIdAuthor'>" . htmlspecialchars($questionPseudoAuthor) . "</a>"; ?></small>
            </section>
            <br>
            <section class="show-answer">
                <form method="POST" class="form-group">
                    <div class="mb-3">
                        <label for="answer" class="form-label">Répondre</label>
                        <textarea name="answer" class="form-control"></textarea>
                        <input type="hidden" name="id_question" value="<?= $idOfQuestion; ?>">
                        <br>
                        <button type="submit" name="validate" class="btn btn-primary">Soumettre</button>
                    </div>
                </form>
                <br>
                <?php
                if (isset($getAllAnswersOfThisQuestion) && $getAllAnswersOfThisQuestion->rowCount() > 0) {
                    echo "<h4>Réponses</h4><hr>";
                    while($answer = $getAllAnswersOfThisQuestion->fetch()) {
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <p><?= htmlspecialchars($answer ['pseudo_author']); ?></p>
                            </div>
                            <div class="card-body">
                                <p><?= $answer['contenu']; ?></p>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                }
                ?>
            </section>
            <?php
        }
        ?>
    </div>
</body>
</html>
