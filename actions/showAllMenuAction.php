<?php

require('database.php');

// Recuperer les questions par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, titre, description, contenu, bin FROM menus ORDER BY id DESC LIMIT 0,5');