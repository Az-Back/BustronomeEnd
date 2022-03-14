<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reservations.css">
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
<div class="block">
    <div class="block-inside">
    <ul class="reservUL">
        <li class="reservli"><span class="glyphicon glyphicon-calendar">&nbsp;Date & Heure</span><li>
        <li class="reservli active"><span class="glyphicon glyphicon-user">&nbsp;Menus</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-option-horizontal">&nbsp;Options</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-ok">&nbsp;Confirmation & Paiement</span><li>
    </ul>
            <div class="all1">
                <div id="demo">

                </div>
             <div>
                <h1 class="titre1">Nombres des couverts et choix des menus</h1>
            </div>
            <div>
                <h1 class="littletext">Consulter <a class="load" href="menus.php">nos menus</a>.</h1>
            </div>

            <div class="menus">
                <div class="menu-container">
                        <div class="menu">
                            <div class="topimg"><img class="allimg" src="../images/menu_1.jpg">
                            Déjeuner - 70€
                            Menu en 4 étapes
                            Entrée, poisson, viande et dessert
                            </div>
                            <div class="bot"></div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_1.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_1.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_1.jpg">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



<script src="../script/calendar.js"></script>

</body>
</html>