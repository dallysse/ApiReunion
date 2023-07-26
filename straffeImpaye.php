<?php
     include_once  'database.php';
     header('Content-Type: application/json');
       $codesql = $connexion-> prepare( "SELECT DISTINCT Nom, Montant, Motif FROM Straffe WHERE Etat = 'Impayer' "
                       );
       $codesql -> execute();
       $resultat = $codesql -> fetchall();
       $retour["success"] = true;
       $retour["results"]["nb"] = count($resultat);
       $retour["results"]["straffe_impayer"] = $resultat;
       echo json_encode($retour)


?>