<!-- <option selected> <?php// echo $_POST['categorie']; ?></option>   reporte la catégorie du fichier detail par défaut -->
<?php/*
                                        while ($resultat = $reponsecat->fetch())
                {
                        echo '<option value="' .$resultat['cat_id'].'" placeholder="'.$_POST['categorie'].'">' .$resultat['cat_nom']. '</option>'; // donne  une liste de toutes les catégories disponibles
                } 
                                ?>>           
}*/
// $resultat->cat_nom = $resultat['cat_nom'] // équivaut aux noms des catégories
?>

<!-- back up  guillaume 

while ($listeCategories = $result3->fetch(PDO::FETCH_OBJ)){
  if ($listeCategories->cat_nom == $categorieProduit){
    echo'<option value="'.$categorieProduit.'"selected>'.$categorieProduit.'</option>';
  } else {
    echo'<option value="'.$listeCategories->cat_nom.'">'.$listeCategories->cat_nom.'</option>';
  }
}-->





                                //  bl ATTRIBUTION DE LA NOUVELLE CATEGORIE AU PRODUIT AYANT l'ID

$attributionnouvellecategorie = $db->prepare('UPDATE `categorie` SET pro_ref=:pro_ref, pro_cat_id=:pro_cat_id, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_photo=:pro_photo, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque WHERE `produits`.pro_id=:pro_id');                                  
$requeteajoutcat->bindValue(":cat_nom", $tab["ajoutdecatinput"]);
$requeteajoutcat->execute();