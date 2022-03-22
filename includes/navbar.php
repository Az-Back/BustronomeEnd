<link rel="stylesheet" href="../styles/navbar.css">
<link rel="stylesheet" href="../styles/mediaqueries.css">
<script src="https://kit.fontawesome.com/10a6ffe905.js" crossorigin="anonymous"></script>
<nav class="navbar1">
  <div class="LogoNav">
    <a href="../pages/accueilParis.php"><img class="LogoNavImage" src="../images/logo.png"></a>
</div>
<div class="toggle">
      <span></span>
      <span></span>
      <span></span>
</div> 
  <ul class="highlist">
    <div class="lolo"><li class="TextNav"><a class="RefNav active" href="../pages/reservation.php" target="_blank">RÉSERVEZ MAINTENANT</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">☆&nbsp; CARTE CADEAU &nbsp;☆</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">LES OFFRES</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">LE CONCEPT</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">PRIVATISATION</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">ACTUALITÉS DU BUS</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">LE BLOG</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">PHOTOS ET VIDÉOS</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">QUESTIONS FRÉQUENTES</a></li></div>
    
    <div class="lala"><li class="TextNav"><a class="RefNav" href="">CONTACTEZ LE BUSTRONOME PARIS</a></li></div>
    <?php 
        if(!isset($_SESSION['auth'])){
          ?>
    <div class="lala"><li class="TextNav"><a class="RefNav" href="signup.php">INSCRIPTION</a></li></div>
    <?php
        } 
          ?>
        <?php 
        if(!isset($_SESSION['auth'])){
          ?>
    <div class="lala"><li class="TextNav"><a class="RefNav" href="login.php">CONNEXION</a></li></div>
    <?php
        } 
          ?>
          <?php 
        if(isset($_SESSION['auth'])){
          ?>
    <div class="lala"><li class="TextNav"><a class="RefNav" href="../actions/logoutAction.php">DECONNEXION</a></li></div>
    <?php
        } 
          ?>
  </ul>
  <div class="place">
    <div class="Icon"><i class="fa-solid fa-location-dot fa-3x"></i></div>
    <div class="links-place">
      <span>ARC DE TRIOMPHE</span>
    <a class="RefNav2" href="">angle avenue Kleber</a></div>
  </div>
  <script src="../script/navbar.js"></script>
</nav>