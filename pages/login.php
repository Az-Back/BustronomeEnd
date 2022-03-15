<?php require('../actions/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/form2.css">
</head>  
<body>
<br><br>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>

    <div class="container">
      <div class="row100">
     <div class="col">
         <div class="inputBox">
             <input type="text" name="pseudo" required="required">
             <span class="text">Pseudo</span>
             <span class="line"></span>
   </div>
       </div>
      <div class="row100">
     <div class="col">
         <div class="inputBox">
             <input type="text" name="password" required="required">
             <span class="text">Password</span>
             <span class="line"></span>
   </div>
       </div>
       <div class="row100">
    <div class="col">
   <input type="submit" name="validate" value="Connexion">
   <br><br>
   <br>
    </div>
    </div>
    </form>
    </div>
</body>
</html>