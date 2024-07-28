<?php

require('actions/database.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idOfQuestion = $_GET['id'];
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {
        $questionInfos = $checkIfQuestionExists->fetch();

        $questionTitle = $questionInfos['titre'];
        $questionPublicationDate = $questionInfos['date_publication'];
        $questionContent = $questionInfos['contenu'];
        $questiondescription = $questionInfos['description'];
        $questionPseudoAuthor = $questionInfos['pseudo_author'];
        $questionIdAuthor = $questionInfos['id_author'];
    } else {
        echo "La question que vous recherchez n'existe pas.";
    }
}else {
    echo "Aucun ID de question spécifié.";
}
?>