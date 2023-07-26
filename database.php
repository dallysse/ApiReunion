     <?php
       $serveur="localhost";
       $login="root";
       $pass="root";
       $base= "ReunionDB";
      // connexion data base
      //;dbname=Cocktails
        try{
       // connexion a la base de donnees
        $connexion = new PDO("mysql:host=$serveur;dbname=ReunionDB", $login, $pass);

    $connexion -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
      echo 'Echec de la connexion: ' .$e -> getMessage();
    }
    ?>
