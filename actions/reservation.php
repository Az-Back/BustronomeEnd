<?php

require('database.php');
if(isset($_POST['valid'])){
        $counterall = $_POST['counterall'];
        $counter = $_POST['counter'];

        $insertcounter = $bdd->prepare('INSERT INTO number(personnes, ajout)VALUES(?, ?)');
        $insertcounter->execute(
            array(
                $counterall,
                $counter
            )
        );
    }        