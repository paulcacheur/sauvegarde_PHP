

        <!-- EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion

        ?>


<a>FORMULAIRE D'AJOUT DE PRODUIT</a>

<form class="col-12  px-0">


<div class="border border-black my-2" id="1ere partie formulaire">

                        <!-- Formulaire ID -->

      <div class="row form-group  my-2 mx-auto">
        <label for="ID" class="  col-sm-12 col-form-label align-self-center py-2">ID:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class="form-control-plaintext py-2 border" id="ID" name="ID" placeholder="ID">
                </div>
      </div>

                        <!-- Formulaire Catégorie -->

                                  <div class="row form-group  my-2 mx-auto">
        <label for="categorie" class="  col-sm-12 col-form-label align-self-center py-2">Catégorie:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="categorie" name="categorie placeholder="categorie">
                </div>
      </div>

                      <!-- Formulaire Référence -->

      <div class="row form-group  my-2 mx-auto">
        <label for="reference" class="  col-sm-12 col-form-label align-self-center py-2">Référence:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="reference"  name="reference"placeholder="reference">
                </div>
      </div>


                     <!-- Formulaire Libellé -->

      <div class="row form-group  my-2 mx-auto">
        <label for="libellé" class="  col-sm-12 col-form-label align-self-center py-2">Libellé:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="libellé" name="libellé" placeholder="libellé">
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
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix:</label>
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
      
                                 <!-- Formulaire Photo A GERER PLUS TARD -->


        <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">Couleur:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="photo" name="photo"  placeholder="photo">
                </div>
      </div>


<!-- boutons submit / Reset / Envoyer - ENVOIE DANS LE FICHIER produits_ajout.php"> --> 

        <form method="POST" action="produitajoutscript.php">

        <button type="submit" class="btn btn-primary">Valider l'ajout du produit</button>

        </form>

                      <!-- BOUTONS retour à l'accueil--> 

<form action="index.php">

<button type="submit" class="btn btn-primary" id="accueil" name="accueil" >Retour a l'accueil</button>

</form>

<!-- RESTE A CADRER L'AJOUT AVANT ENVOI -->




</div>

</form>

<br>


<br>




</html>
