<?php

require('actions/database.php');

$errorMSG = ''; // Initialize the error message

if (isset($_POST['validate'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']); // Hashing the password

        // Check if the user already exists
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if ($checkIfUserAlreadyExists->rowCount() > 0) {
            $userInfos = $checkIfUserAlreadyExists->fetch();
            
            // Verify the password
            if(password_verify($user_password, $userInfos['mdp'])) {
                
                // Start session and store user information
                session_start();
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['pseudo'] = $userInfos['pseudo'];
                $_SESSION['lastname'] = $userInfos['lastname'];
                $_SESSION['firstname'] = $userInfos['firstname'];

                // Redirect to the homepage
                header('Location: index.php');
                exit();
            } else {
                $errorMSG = "Mot de passe incorrect";
            }
        } else {
            $errorMSG = "Pseudo incorrect";
        }
    } else {
        $errorMSG = "Veuillez remplir tous les champs";
    }
}
?>