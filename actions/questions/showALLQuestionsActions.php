<?php
require('actions/database.php');

$getAllQuestions = $bdd->query('SELECT id, id_author, titre, description, pseudo_author, date_publication FROM questions ORDER BY id DESC');

if(isset($_GET['search']) && !empty($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $getAllQuestions = $bdd->query('SELECT id, id_author, titre, description, pseudo_author, date_publication FROM questions WHERE titre LIKE "%'.$search.'%" ORDER BY id DESC');
} else {
    $getAllQuestions->execute();

}
