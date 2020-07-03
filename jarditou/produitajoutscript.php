

        <!-- EN TETE -->

        <?php

              include("entete.php");

              require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions

              $db = connexionBase(); // Appel de la fonction de connexion



                                                            // VALIDATION DU FORMULAIRE

// vérfie la validité des champs du formulaire avec un booléen

$check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07= false;

//pas de vérificaiton pour ID car readonly $id = $_POST['id']; 
$ID = $_POST['ID']; 


// check champ catégorie: check nombre de 1 à 10 chffres
$categorie = $_POST['categorie']; 

if (preg_match("#^[0-9]{1,10}$# ", $categorie))
        {
                $check01 = true;
                echo "catégorie validée: $categorie <br>";
        }
else
        {
                $check01 = false;
                echo 'Catégorie non valide, merci de rentrer de 1 à 10 chiffres, dans les catégories existantes <br>';
        }

// check champ référence: check uniquement si non vide car champ sans règle
$reference = $_POST['reference']; 
if (empty($reference))
        {
                $check02 = false;
                echo "une référence doit être renseigné <br>";
        }
else
        {
                $check02 = true;
                echo"référence valide: $reference<br>";
        }

// check champ libelle: check au moins un caractère
$libelle = $_POST['libelle'];

if (empty($libelle))
{
        $check03 = false;
        echo "un libelle doit être renseigné <br>";
}
else
{
        $check03 = true;
        echo"libelle valide: $libelle<br>";
}



// check champ description: check au moins 1 caractère
$description = $_POST['description']; 
if (empty($description))
{
        $check03 = false;
        echo "une descrition doit être renseignée <br>";
}
else
{
        $check03 = true;
        echo" descrition  valide: $description<br>";
}


// check champ prix: check 6 caractères dont 2 après la virgule

$prix = $_POST['prix']; 
if (preg_match("#^[0-9]{1,4}.[0-9]{2,2}$#", $prix))
        {
                $check04 = true;
                echo "prix validée: $prix <br>";
        }
else
        {
                $check04 = false;
                echo 'prix non valide, merci de rentrer de 1 à 6 chiffres, dont 2 après la virgule <br>';
        }


        // check champ stock: check nombre de 1 à 11 chffres
$stock = $_POST['stock']; 
if (preg_match("#^[0-9]{1,10}$#", $stock))
        {
                $check05 = true;
                echo "stock validé: $stock <br>";

        }
else
        {
                $check05 = false;
                echo 'stock non valide, merci de rentrer de 1 à 11 chiffres  <br>';

        }

        // check champ couleur: check 1 à 30 caractère
$couleur = $_POST['couleur']; 
if (empty($couleur) AND strlen($couleur)>30)
{
        $check06 = false;
        echo "une couleur doit être renseignée, chane de caractère de 1 à 30 caractères <br>";
}
else
{
        $check06 = true;
        echo"couleur valide: $couleur<br><br>";
}


        // check champ PHOTO: POUR L'INSTANT , chaine de caractère non vide 
        $photo = $_POST['photo']; 
        if (empty($description))
        {
                $check07 = false;
                echo "une photo doit être ajoutée <br>";
        }
        else
        {
                $check07 = true;
                echo" photo  valide: $description<br>";
        }



                                          // RECUPERER  VALEURS du FORMULAIRE produit ajout formulaire


$id = $_POST['id']; 
$categorie = $_POST['categorie']; 
$reference = $_POST['reference'];
$libellé = $_POST['libellé'];
$description = $_POST['description']; 
$prix = $_POST['prix'];
$prix = $_POST['stock']; 
$couleur = $_POST['couleur']; 
$photo = $_POST['photo']; 


                                           //   VERIFICATION et MISE EN TABLEAU des variables 

$tab = [];

if (isset($_POST["ID"]))
        $tab["ID"] = (int) $_POST["ID"];

if (isset($_POST["reference"]))
        $tab["reference"] = $reference;

if (isset($_POST["categorie"]))
        $tab["categorie"] = (int) $categorie;

if (isset($_POST["libelle"]))
        $tab["libelle"] = $libelle;

if (isset($_POST["description"]))
        $tab["description"] = $description;

if (isset($_POST["prix"]))
        $tab["prix"] = (float) $prix;

if (isset($_POST["stock"]))
        $tab["stock"] = (int) $stock;

if (isset($_POST["couleur"]))
        $tab["couleur"] = $couleur;

if (isset($_POST["ajout"]) || empty($_POST["ajout"]))
        $tab["ajout"] = date("Y-m-d H:i:s");






                                          // AJOUT DONNEES si formlaire OK


if ($check01 = $check02 = $check03 = $check04 = $check05 = $check06 = true)
        {
        require ("connexionDB.php"); // lien avec connexion de la fonction
        $db = connexionBase(); // Appel de la fonction de connexion

        //requête d'ajout des données sans pro_id car il est en auto_increment
        $requete = $db->prepare('INSERT INTO `produits` (`pro_ref`, `pro_cat_id`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_d_modif`, `pro_bloque`) VALUES
        (:pro_ref, :pro_cat_id, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo, :pro_d_ajout, :pro_d_modif, :pro_bloque);');
        $requete->bindValue(":pro_id", $tab["ID"]);
        $requete->bindValue(":pro_ref", $tab["reference"]);
        $requete->bindValue(":pro_cat_id", $tab["categorie"]);
        $requete->bindValue(":pro_libelle", $tab["libelle"]);
        $requete->bindValue(":pro_description", $tab["description"]);
        $requete->bindValue(":pro_prix", $tab["prix"]);
        $requete->bindValue(":pro_stock", $tab["stock"]);
        $requete->bindValue(":pro_couleur", $tab["couleur"]);
        $requete->bindValue(":pro_d_modif", $tab["modification"]);
        $requete->execute();
        }
else
        {
        echo "données n epeuvent être envoyées car non valides, merci de revenir au formulaire";
        }



  ?>

                                                <!-- BOUTONS -->




                  <form method="POST" action="produits_ajout.php">

                  <button type="submit" class="btn btn-primary">Valider l'ajout du produit</button>

                  </form>



                  <form method="POST" action="produits_ajout.php">

                  <button type="submit" class="btn btn-primary">Valider l'ajout du produit</button>

                  </form>

<!-- syntaxe  AJOUT DB


  -->




</div>

</form>

<br>


<br>




</html>
