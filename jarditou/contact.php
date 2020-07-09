
                                                            <!-- EN TETE -->
                                                            <?php
        include("entete.php");
        ?>




    
    <br>    

<a> Les champs annotés d'un symbole * sont obligatoires </a>
<br>


                                                        <!-- ****** -->

                                                 <!-- DEBUT DU FORMULAIRE -->

                                                      <!-- ****** -->


 <form class="col-12 px-0" name="formulairedecontact"  id="formulairedecontact" method="POST" action="checkcontact.php" enctype="multipart/form-data"> 

      
                <!--  LEGENDE fieldset A RAJOUTER  -->
      
      <div class="form-group">
        <legend>Vos Coordonnées</legend>
      </div>

    <div class="border border-black my-2" id="1ere partie formulaire">

                <!-- Formulaire NOM -->

      <div class="row form-group  my-2 mx-auto">
        <label for="votreNom" class="  col-sm-2 col-form-label align-self-center py-2">Votre Nom*:</label>
        <div class="col-sm-10 px-0">
          <input type="text"  class=" form-control-plaintext py-2 border" id="votreNom" placeholder="saisir votre nom" required>
        </div>
      </div>
      
              <!--  formulaire PRENOM  -->

      <div class="row form-group  my-2 mx-auto">
        <label for="votreprénom" class="  col-sm-2 col-form-label Align-self-center py-2">Votre Prénom*:</label>
        <div class="col-sm-10 px-0 border-black">
          <input type="text"  class="form-control-plaintext Align-self-center py-2 border" id="votreNom" placeholder="Saisir votre Prénom" required>
        </div>
      </div>

             <!--  formulaire GENRE  -->

      <div class="row form-group my-2 mx-auto ">   
        <label for="Sexe" class="col-sm-2 col-form-label">Sexe*:</label>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Genre" id="inlineRadio1" value="Masculin" required>
          <label class="form-check-label" for="inlineRadio1"required>Masculin</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Genre" id="inlineRadio2" value="Féminin" required>
          <label class="form-check-label" for="inlineRadio2" required>Féminin </label>
        </div>

      </div>
    
    </div>

    <div class="border border-black my-2" id="2nde partie formulaire">

                <!-- Formulaire DOB -->

                <div class="row form-group  my-2 mx-auto">
                  <label for="DOB" class="  col-sm-2 col-form-label align-self-center py-2">Date De Naissance*:</label>
                  <div class="col-sm-10 px-0">
                    <input type="text"  class=" form-control-plaintext py-2 border" id="DOB" placeholder="jj/mm/aaaa" required>
                  </div>
                </div>

                <!-- Formulaire Code Postal -->

                <div class="row form-group  my-2 mx-auto">
                  <label for="Code Postal" class="  col-sm-2 col-form-label align-self-center py-2">Code Postal:</label>
                  <div class="col-sm-10 px-0">
                    <input type="text"  class=" form-control-plaintext py-2 border" id="CP" placeholder="Saisir votre Code Postal">
                  </div>
              </div>

                <!-- Formulaire Adresse -->

                <div class="row form-group  my-2 mx-auto">
                    <label for="Adresse" class="  col-sm-2 col-form-label align-self-center py-2">Adresse:</label>
                    <div class="col-sm-10 px-0">
                      <input type="text"  class=" form-control-plaintext py-2 border" id="adresse" placeholder="Saisir votre Adresse">
                    </div>
                </div>
                <!-- Formulaire Ville -->

                <div class="row form-group  my-2 mx-auto">
                  <label for="Ville" class="  col-sm-2 col-form-label align-self-center py-2">Ville:</label>
                  <div class="col-sm-10 px-0">
                  <input type="text"  class=" form-control-plaintext py-2 border" id="Ville" placeholder="Saisir votre Ville">
                </div>
              </div>

              <!-- Formulaire email -->

              <div class="row form-group  my-2 mx-auto">
                <label for="email" class="col-sm-2 col-form-label align-self-center py-2">email:</label>
                <div class="col-sm-10 px-0">
                <input type="email"  class=" form-control-plaintext py-2 border" id="email" placeholder="Dave.loper@afpa.fr" required>
                </div>
              </div>

              </div>
               <!-- Formulaire select -->

      <div class="border border-black my-2" id="3e partie formulaire">

              <div class="row form-group my-2 mx-auto">
                <label for="inlineFormCustomSelect" class="col-sm-2 col-form-label align-self-center py-2" >Sujet*</label>
                <div class="col-6 px-0">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                    <option selected>Veuillez sélectionner un sujet</option>
                    <option value="1">Mes commandes</option>
                    <option value="2">Question susr un produit</option>
                    <option value="3">Réclamations</option>
                    <option value="4">Autres</option>
                  </select>
                </div>
              </div>

           <!-- Formulaire Text area -->

        <div class="form-group">
          <label for="exampleFormControlTextarea1 ml-auto">Votre Question</label>
          <textarea class="form-control" id="question" rows="3"></textarea>
        </div>

      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
        <label class="form-check-label" for="defaultCheck1">
          J'accepte le traitement informatique de ce formulaire
        </label>
      </div>

      <br>
      <br>
                                                        <!-- ****** -->

                                                 <!-- BOUTONS SUBMIT ET RESET -->

                                                      <!-- ****** -->

     <div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <INPUT type="reset" name="annulation" value="Annuler" class="btn btn-light">
    </div>

    <br>

  <!-- Autre approche et test:

  <div class="form-inline my-2 mx-auto">
    <label for="inlineFormCustomSelect" class="col-2 col-form-label py-2 pl-0" >Sujet*</label>
    <div class="col-6 px-0">
      <select class="custom-select mr-sm-2 justify-content-start" id="inlineFormCustomSelect" required>
        <option selected>please choose an option</option>
        <option value="1">Mes commandes</option>
        <option value="2">Question susr un produit</option>
        <option value="3">Réclamations</option>
        <option value="4">Autres</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

  </div> -->



    </form>
                                                            <!-- ****** -->

                                                 <!-- FIN DU FORMULAIRE -->

                                                      <!-- ****** -->



<br>

        <!-- FOOTER -->
        
        <?php
        include("piedpage.php");
        ?>
