

                                        <!-- //bl EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion

              $pro_id = $_GET["pro_id"]; // va chercher le pro_id dans l'adresse URL
              $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id; //  formule la requête
              $result = $db->query($requete);

              // Renvoi de l'enregistrement sous forme d'un objet
              $produit = $result->fetch(PDO::FETCH_OBJ);
        ?>




<a>DETAIL DU PRODUIT</a>                  <!--//bl DEBUT DU FORMULAIRE -->



<form class="col-12 px-0" method="POST" action="produitmodificationform.php" id ="formulairedetail"> 

  <div class="border border-black my-2" id="produitdetail">


                      <!-- Formulaire ID -->  

      <div class="row form-group  my-2 mx-auto">
        <label for="id" class="  col-sm-12 col-form-label align-self-center py-2">ID:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class="form-control-plaintext py-2 border" id="id" name="id" value="<?php echo $produit->pro_id;?>" readonly>
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
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix en Euros:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="prix" name="prix" value="<?php echo $produit->pro_prix;?>" readonly>
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

                        <!-- Formulaire extension photo -->


        <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">Extension photo:</label>
                <div class="col-sm-12 px-0">
                <input type="text" class=" form-control-plaintext py-2 border" name="photoext" id="photoext"  value="<?php echo $produit->pro_photo;?>" readonly>
            
                </div>
        </div>
      </div>


                        <!-- Bouton radio Bloqué   -->

      
      <div class="row form-group my-2 mx-auto ">

      <label for="boutonbloque" class="col-sm-2 col-form-label">Produit bloqué:</label>

            <div class="form-check form-check-inline">

              <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque1" value="1"
                                            <?php 
                                            // ETAPE 2 = attribuer la valeur de la variable
                                            if ($produit->pro_bloque == 1)
                                            {
                                              echo "checked";
                                              $varbloque = 1; // variable varbloque prend la valeur 1 quand le produit est bloqué
                                            }
                                            ?>
              >
              <label class="form-check-label" for="radiobloque1">Oui</label>

            </div>


            <div class="form-check form-check-inline">

              <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque2" value="0"

                                            <?php 
                                            if (is_null($produit->pro_bloque) OR ($produit->pro_bloque) == 0)
                                            {
                                              echo"checked";
                                              $varbloque = 0; // variable varbloque prend la valeur quand le produit n'est pas bloquée
                                            }
                                            ?>
                >
              <label class="form-check-label" for="radiobloque2" >Non </label>


                            <!-- SECTION CACHEE POUR VARIABLE PRENANT LA VALEUR DE pro_bloque pour l'ID récupéré en GET -->

                    <input type="hidden" name="variablecheck" value="<?php echo $varbloque; ?>"></input>  

            </div>
      </div>


                                          <!--//bl LES BOUTONS DU FORMULAIRE HORS SUPPRESSION--> 


      <div class="row form-group  my-2 mx-auto text-center">

                <!-- BOUTON MODIFICATION--> 

                        <div class="  col-sm-6 col-form-label py-2">

                              <button type="submit" class="btn btn-primary" id="submitmodifform" name="submitmodifform">Modification du produit</button>

                        </div>

              <!-- BOUTON RETOUR A L'ACCUEIL  -->

                      <div class="  col-sm-6 col-form-label  py-2">

                      <button type="button" class="btn btn-primary" id="accueil" name="accueil" onclick="location.href='liste.php'">Retour à la liste</button>

                      </div>

              <!-- BOUTON RETOUR A L'ACCUEIL 

                        <div class=" col-sm-4 col-form-label  py-2 Align-items-center">

                        <form method="POST" action="liste.php">
                          <button type="submit" class="btn btn-primary" id="accueil" name="accueil">Retour a l'accueil</button>
                        </form>--> 

                        </div>
      </div>


                <div class="row form-group my-2 ml-4 ">

                        <div class="col-12 col-form-label ">
              <a>Date d'ajout: </a> <?php echo $produit->pro_d_ajout;?>
                        </div>
                </div>


                <div class="row form-group my-2 ml-4 ">
                        <div class="col-12 col-form-label ">
              <a>Date de modification: </a><?php echo $produit->pro_d_modif;?>
                        </div>
                </div>
   

      </form>                                       <!--//bl FIN DU FORMULAIRE -->










                                    
                                                <!--//bl BOUTON SUPPRESSION --> 
                        <!-- dans un formulaire  à part pour envoyer les données dans suppression.php -->



                  <div class="row form-group my-2 mx-auto text-center">


                        <form class="col-sm-12 px-0 col-form-label  py-2"  method="POST" action="suppression.php" id="suppressionform"> 
                            <div >
                            <input type="hidden" id="recupextphoto" name="recupextphoto" value="<?php echo $produit->pro_photo;?>"> <!--  input hidden pour récupérer la valeur de l'extension photo pour pouvoir supprimer photo- -->
                            <input type="hidden" id="recuppro_id" name="recuppro_id" value="<?php echo $produit->pro_id;?>"> <!--  input hidden pour récupérer la valeur de l'extension photo pour pouvoir supprimer photo- -->
                            <button type="button" class="btn btn-primary" id="suppression" name="suppression" onclick="suppressionproduit()">Suppression du produit</button>
                            </div>
                        </form>
                  </div>
<br>



                                                          <!--//bl FOOTER -->
        
        <?php
        include("piedpage.php");
        ?>

