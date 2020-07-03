

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

<form class="col-12  px-0" action="produitmodification.php" method="POST">

  <div class="border border-black my-2" id="produitmodificationform">

                      <!-- Formulaire ID -->

      <div class="row form-group  my-2 mx-auto">
        <label for="ID" class="  col-sm-12 col-form-label align-self-center py-2">ID:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class="form-control-plaintext py-2 border" id="ID" name="ID" value="<?php echo $_POST['id'];?>" readonly>
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

      <div class="row form-group  my-2 mx-auto">
        <label for="categorie" class="  col-sm-12 col-form-label align-self-center py-2">Catégorie:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="categorie" name="categorie"value="<?php echo $_POST['categorie'];?>">
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
        <label for="prix" class="  col-sm-12 col-form-label align-self-center py-2">Prix:</label>
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


                        <!-- Formulaire Photo A GERER PLUS TARD -->

                                 <div class="row form-group  my-2 mx-auto">
        <label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">Couleur:</label>
                <div class="col-sm-12 px-0">
                <input type="text"  class=" form-control-plaintext py-2 border" id="photo" name="photo"  placeholder="photo">
                </div>
      </div>

                        <!-- BOUTONS submit pour le form--> 


              <div class="row form-group  my-2 mx-auto">
                        <div class="  col-sm-6 col-form-label py-2 Align-items-between">

                            <form method="POST" action="produitmodification.php">
                              <button type="submit" class="btn btn-primary" id="submitmodifform" name="submitmodifform">VALIDER LES MODIFICATIONS</button>
                            </form>

                        </div>

                        <div class="  col-sm-6 col-form-label  py-2 Align-items-center">
                        </div>
            </div>
    </div>
</form>

                        <!-- BOUTONS retour à l'accueil--> 

                        <form action="index.php">

                        <button type="submit" class="btn btn-primary" id="accueil" name="accueil" >Retour a l'accueil</button>

                        </div>

                        </form>


</html>
