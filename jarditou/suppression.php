
        <!-- EN TETE -->

<?php

// post venant du fichier detail

              include("entete.php"); // Inclusion de l'en tête commun

              require ("connexionDB.php");
              $db = connexionBase();
              $idproduit = $_GET["pro_id"]; // récupère le pro_id à partir de l'URL
              echo $idproduit;
              $extensionphoto = $_POST["pro_photo"];
              var_dump($extensionphoto);
              $requete = $db->prepare ("DELETE FROM produits WHERE pro_id = $idproduit");
              $result = $requete->execute();

              // unlink('public/images/$idproduit.');

              header('Location: index.php');
?>



</body>


</html>


