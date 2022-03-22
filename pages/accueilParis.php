<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/paris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>
    <title>Paris</title>
</head>
<body>
<div class="container1">
<?php include '../includes/navbar.php'; ?>
<div class="Title">
<h1 class="title">
   <span>Un restaurant original à bord d'un bus à impériale</span> : vivez une expérience inédite !</h1>
</div>
<div class="carousel">
      <div class="carousel_inner">
         <div class="carousel_item carousel_item__active">
            <img src="../images/Bustronome1.jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="../images/tour.jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="../images/repas.jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="../images/manger.jpg" alt="" class="carousel_img">
         </div>
      </div>
   </div>
</div>
<div class="sideshow" id="sideshow">
   <div class="sideshow-inner">
         <h1 class="MainH1">PROFITEZ D’UNE VUE IMPRENABLE</h1>
         <h2 class="MainH2">Grâce au toit entièrement vitré de ce bus à impériale, plongez dans l’univers parisien dans les meilleures conditions de confort, quelle que soit la saison.</h2>
   </div>
</div>     
<form>
                <select name="selectCity" id="selectCity">
                    <option value="paris"><p>Paris</p></option>
                    <option value="londres">Londres</option>
                    <div class="selectop"></div>
                </select>
</form>  
<?php include '../includes/footer.php'; ?>
<script src="../script/script.js"></script>
</body>
</html>