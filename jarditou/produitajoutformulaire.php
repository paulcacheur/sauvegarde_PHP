

        <!-- EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion

        ?>


                                                        <!-- ****** -->

<a>FORMULAIRE D'AJOUT DE PRODUIT</a>                 <!-- DEBUT DU FORMULAIRE -->

                                                        <!-- ****** -->

<form class="col-12  px-0" method="POST" action="produitajoutscript.php" enctype="multipart/form-data"> 


<div class="border border-black my-2" id="1ere partie formulaire">


                        <!-- Formulaire ID non nécessaire car auto increment -->

                        

                        <!-- Formulaire Catégorie -->

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


                      <!-- Formulaire Référence -->

      <div class="row form-group  my-2 mx-auto">
        <label for="reference" class="  col-sm-12 col-form-label align-self-center py-2">Référence:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="reference"  name="reference"placeholder="reference">
                </div>
      </div>


                      <!-- Formulaire libelle -->

      <div class="row form-group  my-2 mx-auto">
        <label for="libelle" class="  col-sm-12 col-form-label align-self-center py-2">libelle:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="libelle" name="libelle" placeholder="inscrire le libelle">
                </div>
      </div>

                      <!-- Formulaire Description -->

      <div class="row form-group  my-2 mx-auto">
        <label for="description" class="  col-sm-12 col-form-label align-self-center py-2">Description:</label>
                <div class="col-sm-12 px-0">
                <textarea type="text"  class="form-control" id="description" rows="3"  name="description" placeholder="description"></textarea >
                </div>
      </div>

                     <!-- Formulaire Prix -->

      <div class="row form-group  my-2 mx-auto">
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix en Euros:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="prix" name="prix"placeholder="prix">
                </div>
      </div>

                        <!-- Formulaire Stock -->

      <div class="row form-group  my-2 mx-auto">
        <label for="stock" class="  col-sm-12 col-form-label align-self-center py-2">Stock:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="stock" name="stock" placeholder="stock">
                </div>
      </div>

                        <!-- Formulaire Couleur -->

      <div class="row form-group  my-2 mx-auto">
        <label for="couleur" class="  col-sm-12 col-form-label align-self-center py-2">Couleur:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="couleur" name="couleur"  placeholder="couleur">
                </div>
      </div>

                        <!-- Formulaire Photo -->


        <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">photo:</label>
                <div class="col-sm-12 px-0">
                <input type="file" name="photo" id="photo"  placeholder="photo"> 
                </div>
      </div>

                        <!-- BOUTON BLOQUE  -->

      
                          <div class="row form-group my-2 mx-auto ">

<label for="boutonbloque" class="col-sm-2 col-form-label">Produit bloqué:</label>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque1" value="1">
        <label class="form-check-label" for="radiobloque1">Oui</label>
      </div>


      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque2" value="0">
        <label class="form-check-label" for="radiobloque2">Non </label>
      </div>


      <!-- <input class="form-check-input" type="hidden" name="valeurbloque" id="valeurbloque" value= > -->



</div>

                                                        <!-- ****** -->

                                                      <!-- LES BOUTONS -->

                                                        <!-- ****** -->



<!-- bouton SMBMIT ENVOIE DANS LE FICHIER produits_ajout.php"> --> 


        <button type="submit" class="btn btn-primary">Valider l'ajout du produit</button>


<!-- BOUTON retour à l'accueil--> 
        <button type="button" class="btn btn-primary" id="accueil" name="accueil" onclick="location.href='liste.php'">Retour à l'accueil</button>


</div>




<!-- ****** -->

</form>                                        <!-- FIN DU FORMULAIRE -->

<!-- ****** -->




        <!-- FOOTER -->
        
        <?php
        include("piedpage.php");
        ?>


<!-- back up catégorie
                                  <div class="row form-group  my-2 mx-auto">
        <label for="categorie" class="  col-sm-12 col-form-label align-self-center py-2">Catégorie:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="categorie" name="categorie" placeholder="categorie">
                </div>
      </div>
       -->