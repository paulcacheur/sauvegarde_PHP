

        <!-- EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion

              $pro_id = $_GET["pro_id"];
              $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
              $result = $db->query($requete);

              // Renvoi de l'enregistrement sous forme d'un objet
              $produit = $result->fetch(PDO::FETCH_OBJ);

        ?>

<form class="col-12 px-0" method="POST" action="produitmodificationform.php" id ="formulairedetail">

                      <!-- Formulaire ID -->

      <div class="row form-group  my-2 mx-auto">
        <label for="ID" class="  col-sm-12 col-form-label align-self-center py-2">ID:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class="form-control-plaintext py-2 border" id="ID" name="id" value="<?php echo $produit->pro_id;?>" readonly>
                </div>
      </div>

                      <!-- Formulaire Référence -->

      <div class="row form-group  my-2 mx-auto">
        <label for="reference" class="  col-sm-12 col-form-label align-self-center py-2">Référence:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="reference" name="reference" value="<?php echo $produit->pro_ref;?>" readonly>
                </div>
      </div>
                            <!-- Formulaire Catégorie -->

      <div class="row form-group  my-2 mx-auto">
        <label for="categorie" class="  col-sm-12 col-form-label align-self-center py-2">Catégorie:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="categorie" name="categorie" value="<?php echo $produit->pro_cat_id;?>" readonly>
                </div>
      </div>

                     <!-- Formulaire libelle -->

      <div class="row form-group  my-2 mx-auto">
        <label for="libelle" class="  col-sm-12 col-form-label align-self-center py-2">libelle:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="libelle" name="libelle" value="<?php echo $produit->pro_libelle;?>" readonly>
                </div>
      </div>

                      <!-- Formulaire Description -->

      <div class="row form-group  my-2 mx-auto">
        <label for="description" class="  col-sm-12 col-form-label align-self-center py-2">Description:</label>
                <div class="col-sm-12 px-0">
                <textarea type="text"  class="form-control" id="description" name="description" rows="3" readonly><?php echo $produit->pro_description;?></textarea >
                </div>
      </div>

                     <!-- Formulaire Prix -->

      <div class="row form-group  my-2 mx-auto">
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="prix" name="prix" value="<?php echo $produit->pro_prix;?>€" readonly>
                </div>
      </div>

                           <!-- Formulaire Stock -->

      <div class="row form-group  my-2 mx-auto">
        <label for="stock" class="  col-sm-12 col-form-label align-self-center py-2">Stock:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="stock" name="stock" value="<?php echo $produit->pro_stock;?>" readonly>
                </div>
      </div>

                           <!-- Formulaire Couleur -->

      <div class="row form-group  my-2 mx-auto">
        <label for="couleur" class="  col-sm-12 col-form-label align-self-center py-2">Couleur:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="couleur" name="couleur" value="<?php echo $produit->pro_couleur;?>" readonly>
                </div>
      </div>


              <!-- BOUTON MODIFICATION--> 



      <div class="row form-group  my-2 mx-auto">

                        <div class="  col-sm-6 col-form-label py-2 Align-items-between">

                              <button type="submit" class="btn btn-primary" id="submitmodifform" name="submitmodifform">Modifier le produit</button>

                        </div>
      </div>

</form>

              <!-- BOUTON RETOUR A L'ACCUEIL --> 

                        <div class="  col-sm-6 col-form-label  py-2 Align-items-center">

                        <form method="POST" action="index.php">
                          <button type="submit" class="btn btn-primary" id="accueil" name="accueil">Retour a l'accueil</button>
                        </form>

                        </div>


              <!-- BOUTON SUPPRESSION --> 


                      <div class="  col-sm-6 col-form-label  py-2 Align-items-center">

                        <button type="button" class="btn btn-primary" id="suppression" name="suppression" onclick="suppressionproduit()">Suppression</button>

                      </div>
      




<br>

          <!-- INFORMATIONS SOUS LE FORMULAIRE -->

      <div class="row form-group my-2 mx-auto ">

        <label for="boutonbloque" class="col-sm-2 col-form-label">Produit bloqué:</label>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque1" value="oui"
          <?php 
          if ($produit->pro_bloque == 1)
          {
            echo "checked";
          }

          ?>
          >
          <label class="form-check-label" for="radiobloque1">Oui</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque2" value="Non"
          <?php 
          if (is_null($produit->pro_bloque))
          {
            echo"checked";
          }
          ?>
          >
          <label class="form-check-label" for="radiobloque2" >Non </label>

      </div>
<br>

          <div class="col-12">
<a>Date d'ajout: </a> <?php echo $produit->pro_d_ajout;?>
          </div>
      </div>

          <div class="col-12">
<a>Date de modification: </a><?php echo $produit->pro_d_modif;?>
          </div>

      </div>

<br>

        <!-- FOOTER -->
        
        <?php
        include("piedpage.php");
        ?>



<!--  syntaxe ajout 


 require ("connexion_bdd.php");
    $db = connexionBase();


    $requete = $db->prepare('INSERT INTO `produits` (`pro_ref`, `pro_cat_id`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_d_modif`, `pro_bloque`) VALUES
  (:pro_ref, :pro_cat_id, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo, :pro_d_ajout, :pro_d_modif, :pro_bloque);');


-->