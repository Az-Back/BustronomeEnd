<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bustronome;charset=utf8;', 'root', 'root');
} catch(Exception $e){
    die('Une erreur a été trouvée : '. $e->getMessage());
}
