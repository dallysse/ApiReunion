     <?php
       include_once  'database.php';
    if(isset($_POST['nom']) && isset($_POST['motif']) && isset($_POST['datereu']) && isset($_POST['montant']) && isset($_POST['etat']))
    {

      $requete= $connexion -> prepare("INSERT INTO Straffe SET Nom = ?, Motif = ?, date_Reunion = ?,  Montant = ?, Etat = ? ");
      $requete -> execute([$_POST['nom'], $_POST['motif'], $_POST['datereu'],  $_POST['montant'], $_POST['etat']] );

     }else{
      echo '';
    }
    ?>