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
