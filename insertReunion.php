     <?php
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: POST");
     header("Access-Control-Max-Age: 3600");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
       include_once  'database.php';
       if(!empty($_POST['Receveur']) && !empty($_POST['bouffeur'])){
          $requete= $connexion -> prepare("INSERT INTO `Reunion`( `Receveur`, `bouffeur`) VALUES ( :receveura, :bouffeura);");
          $requete ->bindParam(':receveura', $_POST['Receveur']);
          $requete ->bindParam(':bouffeura', $_POST['bouffeur']);
          $requete -> execute();
          $retour["success"] = true;
          $retour["message"] = "assez";
          $retour["results"] = array();
          //echo json_encode($retour)
       }
       else{
            $retour["success"] = false;
            $retour["message"] = "pas assez";
            //echo json_encode($retour)
       }
    ?>