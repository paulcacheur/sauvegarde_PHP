<html>
<head>
   <meta charset="UTF-8">
   <title>testDb.php</title>


   <?php

   try 
        {        
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou;port=3308', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
   catch (Exception $e) 
        {
      echo "Erreur : " . $e->getMessage() . "<br>";
      echo "N° : " . $e->getCode();
      die("Fin du script");
        }       


 /* avec variable
$base = 'jarditou';
$utilisateur = 'root';
$motdepasse = '';

        try 
                {
                $db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base, $utilisateur, $motdepasse);

                // Ajout d'une option PDO pour gérer les exceptions
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } 
        catch (Exception $e) 
                {
                echo 'Erreur : ' . $e->getMessage() . '<br />';
                echo 'N° : ' . $e->getCode();
                die('Fin du script');
                }

Ligne 1 : on a écrit une requête SQL dans une chaîne PHP.
Ligne 2 : $db est l'objet retourné par l'appel à PDO, query() est une méthode de cet objet (c'est-à-dire, au sens programmation, une fonction de l'objet). La flèche -> permet d'accéder (appeler) une méthode ou une propriété (attribut) de l'objet.
Ligne 3 : $db->query($requete) revient à appeler la fonction query() de l'objet $db en lui passant la requête SQL en argument. Le résultat $db->query() est stocké dans un objet $result.
Ligne 4 : pour lire le contenu de ce résultat (qui pourrait contenir plusieurs lignes), PHP propose la méthode fetch() (= ramener). Ici, la méthode fetch(PDO::FETCH_OBJ) renvoie l'enregistrement sous la forme d'un objet (dont les propriétés contiennent les différents champs), ou FALSE s'il n'y a plus de lignes. Indirectement, cela signifie que vous ne pouvez accéder aux données que par leur nom de colonne et non par leur numéro.
Plusieurs options de PDOStatement::fetch sont disponibles pour formater le type de retour : tableau associatif, objet, etc.

Attention Libérez la mémoire pour éviter l'encombrement mémoire et la confusion entre les variables, la variable $result est vidée de la mémoire à la ligne 12.

Ligne 5 : la méthode closeCursor() sert à finir proprement une série de fetch(). En théorie, quand on exécute une requête (via query() ou execute()), puis qu'on récupère les données trouvées dans la base avec une série de fetch(), il convient de faire un closeCursor() avant de faire une autre exécution de requête (via query() ou execute()). En pratique, si on utilise MySql, ça ne sert à rien car MySql sait faire une nouvelle exécution de requête sans qu'il ait eu de closeCursor() après la précédente exécution. Si on utilise autre chose que MySql, ou si on envisage de migrer vers autre chose que MySql un jour ou l'autre, ou si on tient à faire un code le plus portable possible, alors closeCursor() peut être utilisé, mais après chaque série de fetch().
Affichage du résultat Les données du produit sont en notre possession, il ne reste plus qu'à les afficher dans la partie <body> de notre page :



        




$requete = "SELECT * FROM produits WHERE pro_id = 7";
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();

?>
</head>



        <body> 
                        <?php echo $produit->pro_id; ?>
                        <br>
                        <?php echo $produit->pro_cat_id; ?>
                        <br>
                        <?php echo $produit->pro_ref; ?>
                        <br>
                        <?php echo $produit->pro_libelle; ?>
                        <br>
                        <?php echo $produit->pro_description; ?>
                        <br>
                        <?php echo $produit->pro_prix; ?>
                        <br> 
                        <?php echo $produit->pro_stock; ?>
                        <br>
                        <?php echo $produit->pro_couleur; ?>
                        <br>
                        <?php echo $produit->pro_photo; ?>
                        <br> 
                        <?php echo $produit->pro_d_ajout; ?>
                        <br> 
                        <?php echo $produit->pro_d_modif; ?>
                        <br> 
                        <?php echo $produit->pro_bloque; ?>


        <?php
        */
try 
{        
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=jarditou;port=3308', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
echo "Erreur : " . $e->getMessage() . "<br>";
echo "N° : " . $e->getCode();
die("Fin du script");
}       

$requete = "SELECT * FROM produits";
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
echo $produit->pro_prix."<br>";



while ($produit = $result->fetch(PDO::FETCH_OBJ))
                        {
                                echo $produit->pro_id." – ".$produit->pro_libelle. "<br>";
                        }


                        
 while ($produit = $result->fetch(PDO::FETCH_OBJ))
                        {
                                echo $produit->pro_prix. "<br>";
                        }




$result->closeCursor();

        ?>

                        </body>
</head>
</html>