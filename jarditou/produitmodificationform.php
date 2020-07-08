

        <!-- EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion
              $requete = "SELECT * FROM produits";
              $result = $db->query($requete);

              // Renvoi de l'enregistrement sous forme d'un objet
              $produit = $result->fetch(PDO::FETCH_OBJ);


        ?>

<a>FORMULAIRE DE MODIFICATION DE PRODUIT</a>

<form class="col-12  px-0" action="produitmodification.php" method="POST" enctype="multipart/form-data">

  <div class="border border-black my-2" id="produitmodificationform">

                      <!-- Formulaire ID -->

      <div class="row form-group  my-2 mx-auto">
        <label for="id" class="  col-sm-12 col-form-label align-self-center py-2">ID:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class="form-control-plaintext py-2 border" id="id" name="id" value="<?php echo $_POST['id'];?>" readonly>
                </div>
      </div>

                      <!-- Formulaire Référence -->

      <div class="row form-group  my-2 mx-auto">
        <label for="reference" class="  col-sm-12 col-form-label align-self-center py-2">Référence:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="reference" name="reference" value="<?php echo $_POST['reference'];?>">
                </div>
      </div>
                        <!-- Formulaire Catégorie -->

        <div class="row form-group my-2 mx-auto">
        <label for="categorie" class="col-sm-12 col-form-label align-self-center py-2" >catégorie</label>
                <div class="col-12 px-0">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="categorie">
                                <option selected>Veuillez sélectionner une catégorie</option>
                                <?php 
                                        $reponsecat = $db->query('SELECT DISTINCT cat_nom, cat_id FROM categories ORDER BY cat_id ASC');
                                        $resultat = $reponsecat->fetch(PDO::FETCH_OBJ);
                                        while ($resultat = $reponsecat->fetch())
                {
                        echo '<option value="' .$resultat['cat_id'].'" placeholder="'.$_POST['categorie'].'">' .$resultat['cat_nom']. '</option>';
                } 
                                ?>>
                        </select>
                </div>
        </div>

                     <!-- Formulaire Libellé -->

      <div class="row form-group  my-2 mx-auto">
        <label for="libelle" class="  col-sm-12 col-form-label align-self-center py-2">Libellé:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="libelle" name="libelle"value="<?php echo $_POST['libelle'];?>">
                </div>
      </div>

                      <!-- Formulaire Description -->

      <div class="row form-group  my-2 mx-auto">
        <label for="description" class="  col-sm-12 col-form-label align-self-center py-2">Description:</label>
                <div class="col-sm-12 px-0">
                <textarea type="text"  class="form-control" id="description" rows="3" name="description"><?php echo $_POST['description'];?></textarea >
                </div>
      </div>

                     <!-- Formulaire Prix -->

      <div class="row form-group  my-2 mx-auto">
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix en Euros:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="prix" name="prix"value="<?php echo $_POST['prix'];?>">
                </div>
      </div>

                           <!-- Formulaire Stock -->

      <div class="row form-group  my-2 mx-auto">
        <label for="stock" class="  col-sm-12 col-form-label align-self-center py-2">Stock:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="stock"  name="stock" value="<?php echo $_POST['stock'];?>">
                </div>
      </div>

                        <!-- Formulaire Couleur -->

      <div class="row form-group  my-2 mx-auto">
        <label for="couleur" class="  col-sm-12 col-form-label align-self-center py-2">Couleur:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="couleur" name="couleur" value="<?php echo $_POST['couleur'];?>">
                </div>
      </div>

                        <!-- Formulaire Photo -->


                        <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">photo:</label>
                <div class="col-sm-12 px-0">
                <input type="file" name="photo" id="photo"  placeholder="photo"> 
                </div>
      </div>


                        <!-- RECUPERATION DE LA VALEUR DU Formulaire RADIO BLOQUE DANS FICHIER DETAILS ET REAFFICHAGE DU BOUTON BLOQUE AVEC LA BONNE VALEUR-->

                                                                                <?php 
                                                                                // variable créee dans un "hidden" input dans le fichier details
                                                                                //Si la variable $_POST['variablecheck'] existe, alors $valeurbloquereport = $_POST['variablecheck']  sinon elle vaut NULL 
                                                                                $valeurbloquereport = isset($_POST['variablecheck']) ? $_POST['variablecheck'] : NULL;

                                                                                ?>

      <div class="row form-group my-2 mx-auto ">

                <label for="boutonbloque" class="col-sm-2 col-form-label">Produit bloqué:</label>

                <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque1" value="1"
                                                                                <?php 
                                                                                if ($valeurbloquereport == 1) // variable créee dans un "hidden" input dans le fichier details
                                                                                {
                                                                                echo "checked";
                                                                                }

                                                                                ?>
                >
                <label class="form-check-label" for="radiobloque1">Oui</label>
                </div>

                <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque2" value="0"
                                                                                <?php 
                                                                                if ($valeurbloquereport == 0) // variable créee dans un "hidden" input dans le fichier details
                                                                                {
                                                                                echo"checked";
                                                                                }
                                                                                ?>
                >
                <label class="form-check-label" for="radiobloque2" >Non </label>

                </div>
        </div>

                        <!-- BOUTONS submit pour Valider la modification du produit--> 


              <div class="row form-group  my-2 mx-auto">

                        <div class="  col-sm-6 col-form-label py-2 Align-items-between">

                            <form method="POST" action="produitmodification.php">
                              <button type="submit" class="btn btn-primary" id="submitmodifform" name="submitmodifform">Valider la modification</button>
                            </form>

                        </div>
                        
                        <div class="  col-sm-6 col-form-label py-2 Align-items-between">
                        <!-- BOUTONS retour à l'accueil--> 
                        <button type="button" class="btn btn-primary" id="accueil" name="accueil" onclick="location.href='index.php'">Retour à l'accueil</button>


                        <!-- BOUTONS retour à l'accueil SANS FORM
                        <div class="  col-sm-6 col-form-label py-2 Align-items-between">
                                <form action="index.php">
                                <button type="submit" class="btn btn-primary" id="accueil" name="accueil" >Retour a l'accueil</button>
                                </form>--> 
                        </div>
                </div>

            </div>
    </div>



</html>



                                <!-- Formulaire Photo A GERER PLUS TARD

                                <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">Photo:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="photo" name="photo"  placeholder="photo">
                </div>
      </div> 
      
      -->


                              <!-- Formulaire Catégorie BACK UP-->

                              <div class="row form-group my-2 mx-auto">
        <label for="categorie" class="col-sm-12 col-form-label align-self-center py-2" >catégorie*</label>
                <div class="col-12 px-0">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="categorie">
                                <option selected>Veuillez sélectionner une catégorie</option>
                                <?php 
                                        $reponsecat = $db->query('SELECT DISTINCT cat_nom, cat_id FROM categories ORDER BY cat_id ASC');
                                        $resultat = $reponsecat->fetch(PDO::FETCH_OBJ);
                                        while ($resultat = $reponsecat->fetch())
                {
                        echo '<option value="' .$resultat['cat_id'].'">' .$resultat['cat_nom']. '</option>';
                } 
                                ?>>
                        </select>
                </div>
        </div>