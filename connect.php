<?php

     $user = 'root';  $pass = 'root';
    $dsn = 'mysql:host=localhost;dbname=parking';

    try{ //tentative de connexion : on crÃƒÆ’Ã‚Â©e un objet de la classe PDO
    	$bdd = new PDO($dsn, $user, $pass);
}

    catch (PDOException $e){
    print "Erreur ! :" . $e->getMessage() . "<br/>";
    die();     }



?>
