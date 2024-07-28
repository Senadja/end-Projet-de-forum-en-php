<?php
session_start();
if(!isset($_SESSION["auth"])){
    header('Location: ../../login.php');
} 
require('../database.php');

// Vérifiez si l'utilisateur est connecté
//require('../users/securityAction.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idOfQuestion = $_GET['id'];

    // Vérifiez si la question existe et si l'utilisateur est l'auteur
    $checkIfQuestionExists = $bdd->prepare('SELECT id, id_author FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {
        $questionInfos = $checkIfQuestionExists->fetch();

        // Vérifiez si l'utilisateur est bien l'auteur de la question
        if ($questionInfos['id_author'] == $_SESSION['id']) {

            // Supprimer la question
            $deleteQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteQuestion->execute(array($idOfQuestion));

            header('Location: ../../my-questions.php');
            exit; // Assurez-vous de terminer le script après la redirection

        } else {
            $errorMsg = "Vous n'avez pas la permission de supprimer cette question";
        }
    } else {
        $errorMsg = "Aucune question ne correspond à cet ID";
    }
} else {
    $errorMsg = "Aucun ID de question spécifié";
}

?>
