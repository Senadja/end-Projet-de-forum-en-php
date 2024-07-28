<?php 

require('actions/database.php');

$errorMSG = ''; // Initialiser le message d'erreur

if (isset($_POST['validate'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])) {
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']); // Correcting the firstname handling

        $checkIfUserAlreadyExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if ($checkIfUserAlreadyExists->rowCount() == 0) {
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, mdp, lastname, firstname) VALUES(?, ?, ?, ?)');
            if ($insertUserOnWebsite->execute(array($user_pseudo, $user_password, $user_lastname, $user_firstname))) {
                // Inscription réussie, redirection vers index.php
                header('Location: index.php');
                exit(); // Assurez-vous de quitter le script après la redirection
            } else {
                $errorInfo = $insertUserOnWebsite->errorInfo();
                $errorMSG = "Erreur lors de l'inscription : " . $errorInfo[2];
            }
        } else {
            $errorMSG = "L'utilisateur existe déjà";
        }
    } else {
        $errorMSG = "Veuillez remplir tous les champs";
    }
}

// Affichage des messages d'erreur
if (!empty($errorMSG)) {
    echo '<p>' . $errorMSG . '</p>';
}
?>
