<?php 
require('../actions/signupAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/form2.css">
</head>  
<body>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p class="message">'.$errorMsg.'</p>';} ?>

      <div class="container">
      <div class="row100">
     <div class="col">
         <div class="inputBox">
             <input type="text" name="pseudo" required="required">
             <span class="text">Pseudo</span>
             <span class="line"></span>
   </div>
       </div>
       <div class="col">
           <div class="inputBox">
               <input type="text" name="password" required="required">
               <span class="text">Mot de passe</span>
               <span class="line"></span>
     </div>
</div>
<div class="col">
      <input type="submit" name="validate" value="Envoyer">
    </div>
</form>    
</body>
</html>         