<?php

require('database.php');

    
    // l'id de la question en parametre
    $idOfdate = $_GET['id'];

    // Verifier si la question existe
    $checkIfdateExist = $bdd->prepare('SELECT date FROM dates WHERE id = ?');
    $checkIfdateExist->execute(array($idOfdate));

    if($checkIfdateExist->rowCount() > 0){

        // Recuperer les infos de la question
        $dateInfos = $checkIfdateExist->fetch();
        

            // Supprimer la question en fonction de son id rentré en paramétre
            $deleteThisDate = $bdd->prepare('DELETE FROM dates WHERE id = ?');
            $deleteThisDate->execute(array($idOfdate));

            // Rediriger l'utilisateur vers ses questions
            header('Location: ../pages/reservation2.php');

        }