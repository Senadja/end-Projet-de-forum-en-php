<?php
//require('actions/users/securityAction.php');
require('actions/database.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {

        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('Y-m-d'); // Format de date correct pour SQL
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        // Préparer et exécuter la requête d'insertion
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, description, contenu, id_author, pseudo_author, date_publication) VALUES (?, ?, ?, ?, ?, ?)');
        $result = $insertQuestionOnWebsite->execute(array(
            $question_title,
            $question_description,
            $question_content,
            $question_id_author,
            $question_pseudo_author,
            $question_date
        ));

        if ($result) {
            $successMsg = 'Votre question a été publiée sur le site';
        } else {
            $errorInfo = $insertQuestionOnWebsite->errorInfo();
            $errorMsg = 'Erreur lors de la publication de la question: ' . $errorInfo[2];
        }
    } else {
        $errorMsg = 'Veuillez remplir tous les champs';
    }
}
?>
