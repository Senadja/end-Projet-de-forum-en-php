<?php
require('actions/database.php');

if (isset($idOfQuestion)) {
    $getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id, id_author, pseudo_author, contenu FROM answers WHERE id_question = ? ORDER BY id DESC');
    $getAllAnswersOfThisQuestion->execute(array($idOfQuestion));
} else {
    $errorMsg = "Aucun ID de question spécifié.";
}
?>
