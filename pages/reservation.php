<?php
session_start();
require("../actions/daterecup.php");
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <scrip src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Réservation</title>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>
<div class="block">
<div class="block-inside">
<ul class="reservUL">
        <li class="reservli active"><span class="glyphicon glyphicon-calendar"></span><span class="textli">&nbsp;Date & Heure</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-user"></span><span class="textli">&nbsp;Menus</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-option-horizontal"></span><span class="textli">&nbsp;Options</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-ok"></span><span class="textli">&nbsp;Confirmation & Paiement</span><li>
</ul>
<div class="all1">
<h2 class="titre">Réservez une table</h2>
<form name="input" method="post" id="dateput">
        <p>Veuillez selectionner une date: <input type="text" class="datedate" name="fdate" id="datepicker"></p>
        <p>Veuillez selectionner une heure: 
            <select name="fhours" id="selecthours">
                    <option id="option1" name="fhours" value="12h15"><p>12:15</p></option>
                    <option id="option2" name="fhours" value="19h45">19:45</option>
                    <option id="option2" name="fhours" value="20h45">20:45</option>
                </select>
        <input type="submit" name="Submit" id="sub" value="Soumettre">
    </form>
<h2 class="titre1">Services possibles</h2>
<table class="table services-Table">
    <tbody>
        <tr>
            <th></th>
            <th>Horaire</th>
            <th>Lieu</th>
            <th></th>
        </tr>
        <tr>
            <td rowspan="3" class="top">Déjeuner</td>
            <td>12h15</td>
            <td>Arc de Triomphe</td>
            <td><a class="loada" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>12h15</td>
            <td>Arc de Triomphe</td>
            <td><a class="loada" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>12h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td rowspan="4" class="down">Diner</td>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td><a class="loada" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
    </tbody>
</table>
</div>        
</div>
<?php include '../includes/footer.php'; ?>
</div>

<script>
$(function() {
$( "#datepicker" ).datepicker({
altField: "#datepicker",
closeText: 'Fermer',
prevText: 'Précédent',
nextText: 'Suivant',
currentText: 'Aujourd\'hui',
monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
weekHeader: 'Sem.',
dateFormat: 'DD dd MM yy'
});
});
</script>
<script src="../script/compteur.js"></script>
</body>
</html>