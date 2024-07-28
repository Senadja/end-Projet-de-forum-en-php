<?php 
require('actions/users/securityAction.php');
require('actions/questions/getQuestionInfos.php');
require('actions/questions/editQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <?php 
    if (isset($errorMsg)) {
        //Vérifie si une variable $errorMsg est définie.
        echo '<p>' . $errorMsg . '</p>';
         //Si c'est le cas, affiche son contenu à l'intérieur d'un paragraphe <p>.
    } 
    if (empty($errorMsg) && !empty($questionInfos)) {
        //Vérifie que la variable $errorMsg est vide et que $questionInfos contient des données. 
        //Si ces conditions sont remplies, le formulaire de modification de la question est affiché.
    ?>
    <form class="conteneur" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($questionInfos['titre'] ?? ''); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description de la question</label>
            <textarea class="form-control" name="description" required><?php echo htmlspecialchars($questionInfos['description'] ?? ''); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu de la question</label>
            <textarea class="form-control" name="content" required><?php echo htmlspecialchars($questionInfos['contenu'] ?? ''); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Modifier question</button>
    </form>
    <?php 
    } 
    ?>
</body>
</html>
