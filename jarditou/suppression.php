
        <!-- EN TETE -->

<html>

<?php

// post venant du fichier detail

              include("entete.php"); // Inclusion de l'en tête commun

              require ("connexionDB.php");
              $db = connexionBase();

              /*$idproduit = $_GET["pro_id"]; // récupère le pro_id à partir de l'URL
              echo $idproduit;*/

              var_dump($_POST);
              $extensionphoto = $_POST["recupextphoto"];
              var_dump($extensionphoto);
              $recuppro_id = $_POST["recuppro_id"];
              var_dump($recuppro_id);


              $requete = $db->prepare ("DELETE FROM produits WHERE pro_id = $recuppro_id");
              $result = $requete->execute();


                if (file_exists("public/images/$recuppro_id.$extensionphoto"))
                {
                        unlink("public/images/$recuppro_id.$extensionphoto"); // supprimer la photo dans le dossier source
                }

                header('Location: index.php'); // redirection sur la page index


?>

</body>


</html>


