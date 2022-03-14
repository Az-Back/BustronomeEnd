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
<div class="block1">
    <div class="block-inside1">
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
                            <h3>Déjeuner - 70€</h3>
                            <p>Menu en 4 étapes <br>Entrée, poisson, viande et dessert</p>
                            </div>
                            <div class="bottom">
                                    <a href=""><span class="glyphicon glyphicon-minus"></span></a>
                                <span class="update">0</span>
                                    <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_2.jpg">
                                <h3>Déjeuner - boissons comprises - 90€</h3>
                                <p>Menu dégustation en 4 étapes avec accord mets et vins : <br>2 verres de vin, eau minérale ou gazeuse, café ou thé</p>
                                <div class="bottom">
                                    <a href=""><span class="glyphicon glyphicon-minus"></span></a>
                                <span class="update">0</span>
                                    <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_40.jpg">
                                <h3>Déjeuner et visite Arc de triomphe - 83€</h3>
                                <p>Menu en 4 étapes sans boisson <br>+ Visite libre de l'Arc de triomphe avec accès prioritaire</p>
                            </div>
                            <div class="bottom">
                                    <a href=""><span class="glyphicon glyphicon-minus"></span></a>
                                <span class="update">0</span>
                                    <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                        </div>
                    </div>
                    <div class="menu-container">
                        <div class="menu">
                            <div class="topimg">
                                <img class="allimg" src="../images/menu_3.jpg">
                                <h3>Déjeuner enfant - 40€</h3>
                                <p>Menu en 3 étapes avec une boisson. <br>Pour les moins de 12 ans</p>
                            </div>
                            <div class="bottom">
                                    <a href=""><span class="glyphicon glyphicon-minus"></span></a>
                                <span class="update">0</span>
                                    <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="buttondown">
                <a class="buttondrop" href="reservation.php">Retour</a>
                <a class="buttondrop1 active"href="reservation.php">Continuer</a>
            </div>
            <div class="buttondown">
                <a href="formulaire.php" class="buttondrop2">Ajouter un menu</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script src="../script/calendar.js"></script>

</body>
</html>