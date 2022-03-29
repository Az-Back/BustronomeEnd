<?php


require('database.php');
 
if(isset($_POST['Submit'])){

    if(!empty($_POST['fdate']) && !empty($_POST['fhours'])){
    // Verifier si les champs ne sont pas vides
    
        
        // les données de la question
        $date = $_POST['fdate'];
        $hours = $_POST['fhours'];
        
        
        // Inserer la question sur la question
        $insertdate = $bdd->prepare('INSERT INTO dates(date, hour)VALUES(?, ?)');
        $insertdate->execute(
            array(
                $date,
                $hours
            )
        );

        $successMsg = 'Cela a marcher';
        header('Location: ../pages/reservation.php');
     } else {
        $errorMsg = 'Veuilez remplir tous les champs !';
     }
    }
    $getdate = $bdd->query('SELECT id, date, hour FROM dates');    
?>