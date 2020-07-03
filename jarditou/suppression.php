
        <!-- EN TETE -->

<?php

              include("entete.php"); // Inclusion de l'en tête commun



              require ("connexionDB.php");
              $db = connexionBase();
              $idproduit = $_GET["pro_id"];
              echo $idproduit;
              $requete = $db->prepare ("DELETE FROM produits WHERE pro_id = $idproduit");
              $result = $requete->execute();

?>



</body>


</html>


