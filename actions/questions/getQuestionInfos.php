<?php
require("actions/database.php");

$errorMsg = "";
$questionInfos = [];

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idOfQuestion = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT id, id_author, titre, description, contenu FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {
        $questionInfos = $checkIfQuestionExists->fetch();

        if ($questionInfos['id_author'] != $_SESSION['id']) {
            $errorMsg = "Vous n'avez pas la permission de modifier cette question.";
            $questionInfos = []; // Vider les informations de la question pour masquer le formulaire
        }
    } else {
        $errorMsg = "Aucune question ne correspond à cet ID.";
    }
} else {
    $errorMsg = "Aucun ID de question spécifié.";
}
?>
