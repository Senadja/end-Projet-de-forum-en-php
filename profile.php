<?php
    require('actions/users/showUserProfile.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>    
    <div class="container">
        <?php
            if (isset($errorMsg)) {
                echo '<p>' . $errorMsg . '</p>';
            }

            if (isset($userPseudo)) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5>@<?= htmlspecialchars($userPseudo); ?></h5>
                        <hr>
                        <p><?= htmlspecialchars($userFirstname); ?> <?= htmlspecialchars($userLastname); ?></p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5>Questions de l'utilisateur :</h5>
                        <hr>
                        <?php
                        while ($question = $getHisQuestions->fetch()) {
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($question['titre']); ?></h5>
                                    <p class="card-text"><?= htmlspecialchars($question['description']); ?></p>
                                    <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Voir la question</a>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>
