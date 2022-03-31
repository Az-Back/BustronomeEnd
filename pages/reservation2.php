<?php
require('../actions/showAllMenuAction.php');
require("../actions/daterecup.php");
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reservations.css">
    <link rel="stylesheet" href="../styles/mediaqueries2.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Menus</title>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
<div class="block1">
    <div class="block-inside1">
    <ul class="reservUL">
        <li class="reservli"><span class="glyphicon glyphicon-calendar"></span><span class="textli">&nbsp;Date & Heure</span><li>
        <li class="reservli active"><span class="glyphicon glyphicon-user"></span><span class="textli">&nbsp;Menus</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-option-horizontal"></span><span class="textli">&nbsp;Options</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-ok"></span><span class="textli">&nbsp;Confirmation & Paiement</span><li>
        <?php 
        if(isset($_SESSION['password'])){
          ?>
        <li class="reservli"><a class="buttondown" href="formulaire.php">&nbsp;Ajouter un menu</a><li>
        <?php
        }
        ?>
    </ul>
            <div class="all1">
                <div id="demo">
                <?php
                $use = $getdate->fetch()
                ?>   
                <div class="date"><?= $use['date']; ?> à <?=$use['hour']; ?> pour <span class="upgrade"> X </span> personnes</div>
                <?php
                
                ?>
                </div>
                <br>
                <div class="test"> </div>
             <div>
                <h1 class="titre1">Nombres des couverts et choix des menus</h1>
            </div>
            <div class="buttondown">
                <a class="buttondrop" href="reservation.php">Retour</a>
                <a class="buttondrop1 active"href="reservation.php">Continuer</a>
            </div>
            <div>
                <h1 class="littletext">Consulter <a class="loada" href="menus.php">nos menus</a>.</h1>
            </div>
                    <?php

                    while($question = $getAllQuestions->fetch()){
                        ?>
        <div class="menu-container">
            <div class="menu">
                <div class="topimg">
                <?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $question['bin'] ) . '" />'; ?>
                <h3><?= $question['titre']; ?> <?= $question['contenu']; ?></h3>
                <p><?= $question['description']; ?></p>
                </div>
                <div class="bottom">
                        <a href="" class="menuMoins"><span class="glyphicon glyphicon-minus"></span></a>
                            <span id="update">0</span>
                        <a href="" class="menuPlus"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <?php 
        if(isset($_SESSION['auth'])){
          ?>
                <div><a href="formulaire2.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier le menu</a></div>
                <br>
                <div><a href="../actions/deleteMenu.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer le menu</a></div>
            
            <?php
        } 
          ?>
          </div>
        </div>    
        <?php
    }
    ?>
            
            </div>
        </div>
    </div>
</div>


<script src="../script/compteur.js"></script>

</body>
</html>