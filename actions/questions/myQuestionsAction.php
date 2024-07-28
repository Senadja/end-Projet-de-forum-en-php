<?php

require('actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id, titre, description FROM questions WHERE id_author = ?  ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));