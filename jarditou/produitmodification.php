
        <!-- EN TETE -->

<?php

              include("entete.php"); // Inclusion de l'en tête commun





                                        // VALIDATION DU FORMULAIRE ID, cat, ref, lib, desc, prix, stock, couleur, photo, (ajout, modif), bloqué


// vérfie la validité champs du formulaire avec un booléen

$check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 =  $check08 =false;

//pas de vérificaiton pour ID car readonly $id = $_POST['id']; juste définition de variable
$ID = $_POST['ID']; 


        // check champ CATEGORIE: check nombre de 1 à 10 chffres

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

        // check champ REFERENCE: check uniquement si non vide et nombre de caractères >10

$reference = $_POST['reference']; 
if (empty($reference) OR strlen($_POST['reference'])>10)
        {
                $check02 = false;
                echo "une référence de 1 à 10 caractère doit être renseignée <br>";
        }
else
        {
                $check02 = true;
                echo"référence valide: $reference<br>";
        }

        // check champ LIBELLE: check au moins un caractère et moins de 200

$libelle = $_POST['libelle'];

if (empty($libelle) OR strlen($libelle)>200)
        {
                $check03 = false;
                echo "un libelle doit être renseigné <br>";
        }
else
        {
                $check03 = true;
                echo"libelle valide: $libelle<br>";
        }


        // check champ DESCRIPTION: check au moins 1 caractère

$description = $_POST['description']; 
if (empty($description) OR strlen($_POST['description'])>1000)
        {
                $check04 = false;
                echo "une descrition de moins de 1000 caractères doit être renseignée <br>";
        }
else
        {
                $check04 = true;
                echo strlen($_POST['description']);
                echo" descrition  valide: $description<br>";
        }

        // check champ PRIX : check 6 caractères dont 2 après la virgule

$prix = $_POST['prix']; 
if (preg_match("#^[0-9]{1,4}.[0-9]{2,2}$#", $prix))
        {
                $check05 = true;
                echo "prix validée: $prix <br>";
        }
else
        {
                $check05 = false;
                echo 'prix non valide, merci de rentrer de 1 à 6 chiffres, dont 2 après la virgule <br>';
        }

        // check champ STOCK: check nombre de 1 à 11 chffres

$stock = $_POST['stock']; 
if (preg_match("#^[0-9]{1,11}$#", $stock))
        {
                $check06 = true;
                echo "stock validé: $stock <br>";

        }
else
        {
                $check06 = false;
                echo 'stock non valide, merci de rentrer de 1 à 11 chiffres  <br>';

        }

        // check champ COULEUR: check 1 à 30 caractère

$couleur = $_POST['couleur']; 
if (empty($couleur) AND strlen($couleur)>30)
        {
                $check07 = false;
                echo "une couleur doit être renseignée, chane de caractère de 1 à 30 caractères <br>";
        }
else
        {
                $check07 = true;
                echo"couleur valide: $couleur<br><br>";

        }
                // check champ PHOTO à GERER plus tard (< 4 caratères pour l'instant)

$photo = $_POST['photo']; 
if (empty($photo) OR strlen($_POST['photo'])>4)
        {
                $check08 = false;
                echo "une extension de photo doit être renseignée, chane de caractère de 1 à 4 caractères <br>";
        }
        else
        {
                $check08 = true;
                echo"photo valide: $couleur<br><br>";
        
        }


                // check  BOUTON RADIO BLOQUE non nécessaire car donnée reportée du fichier détails




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

if (isset($_POST["boutonbloque"]))
        $tab["boutonbloque"] = $_POST["boutonbloque"];


if (isset($_POST["modification"]) || empty($_POST["modification"]))
        $tab["modification"] = date("Y-m-d H:i:s");




if ($check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 = $check08 = true)
        {
        require ("connexionDB.php"); // lien avec connexion de la fonction
        $db = connexionBase(); // Appel de la fonction de connexion

        // remplace les 
        $requete = $db->prepare('UPDATE `produits` SET pro_ref=:pro_ref, pro_cat_id=:pro_cat_id, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque WHERE `produits`.pro_id=:pro_id');
        $requete->bindValue(":pro_id", $tab["ID"]);
        $requete->bindValue(":pro_ref", $tab["reference"]);
        $requete->bindValue(":pro_cat_id", $tab["categorie"]);
        $requete->bindValue(":pro_libelle", $tab["libelle"]);
        $requete->bindValue(":pro_description", $tab["description"]);
        $requete->bindValue(":pro_prix", $tab["prix"]);
        $requete->bindValue(":pro_stock", $tab["stock"]);
        $requete->bindValue(":pro_couleur", $tab["couleur"]);
        $requete->bindValue(":pro_d_modif", $tab["modification"]);
        $requete->bindValue(":pro_bloque", $tab["boutonbloque"]);
        $requete->execute();
        header('Location: index.php');
        }
else
        {
        echo "données n epeuvent être envoyées car non valides, merci de revenir au formulaire";
        }

?>

</body>


</html>


<?php


/* vérificaton de variables

//Si la variable $_POST['truc'] existe, alors $truc = $_POST['truc']  sinon elle vaut NULL 
$truc = isset($_POST['truc']) ? $_POST['truc'] : NULL;
*/


/*
$requete = "SELECT * FROM produits";
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
*/