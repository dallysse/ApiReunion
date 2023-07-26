<?php
include_once  'database.php';

        $caisse = 0;
        try{

           $codesql = $connexion-> prepare( "SELECT sum(Montant)FROM caisse"
                            );
           $codesql -> execute();
           $resultat = $codesql -> fetchAll();
           foreach($resultat as $val){
            $caisse +=  $val[0];
            }


       $codesql = $connexion-> prepare( "SELECT DISTINCT sum(Montant) FROM Straffe WHERE Etat = 'Payer' "
                       );
       $codesql -> execute();
       $resultat = $codesql -> fetchall();
       echo '<ul class="list-group">';
       echo'<li  class="list-group-item"><strong  class="h3" style="color:purple;" > Montant de la caisse </strong></li>';
       foreach ($resultat as $key => $value) {
        $caisse +=  $value[0];
       }
         echo'<li class="list-group-item"> Actuellement il ya '. $caisse .' euro dans la caisse</li>' ;

            if(isset($_POST['nom']) && isset($_POST['motif']) && isset($_POST['datereu']) && isset($_POST['montant']) )
            {

              $requete= $connexion -> prepare("INSERT INTO Caisse SET Nom = ?, Motif = ?, date_Reunion = ?,  Montant = ? ");
              $requete -> execute([$_POST['nom'], $_POST['motif'], $_POST['datereu'],  $_POST['montant'], $_POST['etat']] );

             }else{
              echo '';
            }

        }catch(PDOException $e){
          echo 'Echec de la connexion: ' .$e -> getMessage();
        }

     ?>