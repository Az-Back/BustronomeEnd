<?php
session_start();
require('database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si l'user a bien completer tous les champs !
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){

        // Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Verifier si l'user existe deja
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            // Inserer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_password));

            // Récuperer les infos de l'utilisateur (surtout l'id)
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo FROM users WHERE pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo));

            $userInfos = $getInfosOfThisUserReq->fetch();
            
            // Authentifier l'utilsateur sur le site et récuperer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];

            // Redirection sur index.php
            header('Location: ../pages/accueilParis.php');

        } else {
            $errorMsg = "L'utilisateur existe deja";
        }

    } else {
        $errorMsg = "Veuillez completer tous les champs...";
    }
}