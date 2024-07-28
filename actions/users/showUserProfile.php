<?php
require('actions/database.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idOfUser = $_GET['id'];

    $checkIfUserExists = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0){
        $userInfos = $checkIfUserExists->fetch();

        $userPseudo = $userInfos['pseudo'];
        $userLastname = $userInfos['lastname'];
        $userFirstname = $userInfos['firstname'];

        $getHisQuestions = $bdd->prepare('SELECT id, titre, description FROM questions WHERE id_author = ?');
        $getHisQuestions->execute(array($idOfUser));
    } else {
        $errorMsg = "Aucun utilisateur trouvé.";
    }

} else {
    $errorMsg = "Aucun utilisateur trouvé.";
}
?>
