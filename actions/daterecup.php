<?php


require('database.php');
 
if(isset($_POST['Submit'])){

    // Verifier si les champs ne sont pas vides
    
        
        // les données de la question
        $date = $_POST['fdate'];
        
        
        // Inserer la question sur la question
        $insertdate = $bdd->prepare('INSERT INTO dates(date)VALUES(?)');
        $insertdate->execute(
            array(
                $date
            )
        );

        $successMsg = 'Cela a marcher';
        header('Location: ../pages/reservation.php');
     } else {
        $errorMsg = 'Veuilez remplir tous les champs !';
    }

    $getdate = $bdd->query('SELECT id, date FROM dates');    
?>