<?php 
      require('actions/questions/publish-QuestionAction.php');
      require('actions/users/securityAction.php');
?>
<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <form class="conteneur" method="post">
        <?php 
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } elseif (isset($successMsg)) {
            echo '<p>' . $successMsg . '</p>';
        }
        ?>
        <div class="mb-3">
            <label for="title" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description de la question</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu de la question</label>
            <textarea class="form-control" name="content" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
    </form>
</body>
</html>
