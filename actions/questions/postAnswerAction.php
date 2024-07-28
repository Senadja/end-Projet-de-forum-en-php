<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require('actions/database.php');

if (isset($_POST['validate'])) {
    if (!empty($_POST['answer']) && !empty($_POST['id_question'])) {
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $idOfQuestion = htmlspecialchars($_POST['id_question']);
        
        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_author, pseudo_author, id_question, contenu) VALUES(?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfQuestion, $user_answer));

        $successMsg = "Votre réponse a été publiée avec succès.";
    } else {
        $errorMsg = "Veuillez remplir tous les champs.";
    }
}
