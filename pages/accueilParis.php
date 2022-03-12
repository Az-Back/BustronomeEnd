<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/paris.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>
    <title>Paris</title>
</head>
<body>
<div class="container1">
<?php include '../includes/navbar.php'; ?>
<div class="carousel">
      <div class="carousel_inner">
         <div class="carousel_item carousel_item__active">
            <img src="../images/Bustronome1.jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="../images/repas.jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="../images/tour.jpg" alt="" class="carousel_img">
         </div>
      </div>
   </div>
</div>
<form>
                <select name="selectCity" id="selectCity">
                    <option value="paris">Paris</option>
                    <option value="londres">Londres</option>
                </select>
</form>  
<?php include '../includes/footer.php'; ?>
<script src="../script/script.js"></script>
</body>
</html>