<?php
session_start();
require('database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si l'user a bien completer tous les champs !
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){

        // Les données de l'user
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['password']);
    
        if($pseudo_saisi == $pseudo_par_defaut && $mdp_saisi == $mdp_par_defaut){
            $_SESSION['password'] = $mdp_saisi;
            $_SESSION['pseudo'] = $pseudo_saisi;
            $_SESSION['auth'] = true;
            header('Location: ../pages/accueilParis.php'); 
        } else {
            $errorMsg = "Votre mot de passe ou pseudo est incorrect";
        }

    } else {
        $errorMsg = "Veuillez completer tous les champs...";
    }
}