<!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <title>Atelier PHP N°4 - page de détail</title>
     <?php   


        require "zEVAL_connexionDB.php";                // Inclusion de notre bibliothèque de fonctions, et notamment la fonction appelant la DB
        $db = connexionBase();                         // Appel de la fonction de connexion connectionbase()
        $pro_id = $_GET["pro_id"];                     // variable du numér de pro_id que nous allons chercher dans un formulaire front end
        $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
        $result = $db->query($requete);
        $produit = $result->fetch(PDO::FETCH_OBJ);     // Renvoi de l'enregistrement sous forme d'un objet


   ?>

   </head>
   <body> 
        <?php echo $produit->pro_libelle; ?> référence <?php echo $produit->pro_ref; ?>
        <br>
        <?php echo $produit->pro_description; ?>
        <br>
        <?php echo $produit->pro_prix; ?>
   </body>
 </html>
