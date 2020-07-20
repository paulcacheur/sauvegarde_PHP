
                                                        <!--//bl EN TETE -->

<?php
// post venant du fichier produitmoficiationform

              include("entete.php"); // Inclusion de l'en tête commun

              require ("connexionDB.php"); // lien avec connexion de la fonction
              $db = connexionBase(); // Appel de la fonction de connexion



                                        // bl VALIDATION DU FORMULAIRE prododuitmodificationform


// vérfie la validité champs du formulaire avec un booléen

$check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 =  $check08 = false;

//pas de vérificaiton pour ID car readonly $id = $_POST['id']; juste définition de variable pour nommer la photo
$id = $_POST['id'];
//var_dump($id);

        // todo check champ NOM DE CATEGORIE: check de 1 à 200 caractère A FAIRE après

                                        //bl CATEGORIE EXISTANTE

                                        //^ gestion de l'ID
if ($_POST['categorie'] != "autre") // si le choix du select prend la valeur d'un ID de catégorie existant et n'est donc pas "autre"

        {
        $idcategorieexistante = $_POST['categorie']; // création de la variable de l'ID correspondant au nom de la catégorie sélectionnée

// var_dump($idcategorieexistante); // check variable effectué ok

                                        //^ gestion du nom

$nomcategorieexistanterequete = $db->query('SELECT cat_nom FROM categories WHERE cat_id='.$idcategorieexistante.''); 
$nomcategorieexistanteresultat = $nomcategorieexistanterequete ->fetch(PDO::FETCH_OBJ); // requete pour trouver l'ID correspondant à la catégorie

// var_dump($nomcategorieexistanteresultat); // check variable effectué ok

        // DONC categorie existante: id = $idcategorieexistante nom = $nomcategorieexistanteresultat

        }

if ($_POST['categorie'] == "autre") // si le choix du select est "autre"

        {
                                        //bl AJOUT DE CATEGORIE  DANS LA TABLE CATEGORIE

                                                //^ gestion du nom de la nouvelle catégorie

        if (isset($_POST["ajoutdecatinput"])) // check remplissage de la nouvelle catégorie (reprise du formulaire)
                {
                $nouvellecategorie = $_POST["ajoutdecatinput"];  // variable reprenant le nom de la nouvelle categorie  (reprise du formulaire)
// var_dump($nouvellecategorie); // check variable effectué ok
                
  
                                        //^ check que la nouvelle catégorie est bien nouvelle

                $reponsecat = $db->query('SELECT DISTINCT cat_nom, cat_id FROM categories ORDER BY cat_id ASC');
                $resultatcat = $reponsecat->fetch(PDO::FETCH_OBJ);
        
                        while ($resultatcat = $reponsecat->fetch())
                        {
                                if ($nouvellecategorie == $resultatcat['cat_nom'])
                                {
                                        echo "erreur, la catégorie existe déjà, merci de la sélectionner dans la liste";
                                        exit();
                                }

                        }
                                                                //^ AJOUT DANS LA DB

                $tab["nouvellecategorie"] = $_POST["ajoutdecatinput"]; // creation de la variable dans un tableau correspondant à la saisie de la nouvelle catégorie

                $requeteajoutcat = $db->prepare('INSERT INTO `categories` (`cat_nom`) VALUES (:cat_nom);'); //requête d'ajout des données dans tableau catégorie sans cat_id car il est en auto_increment
                $requeteajoutcat->bindValue(":cat_nom", $tab["nouvellecategorie"]);
                $requeteajoutcat->execute(); 

                                        //^ gestion de l'ID de la nouvelle catégorie

                $idnouvellecategorierequete = $db->query('SELECT max(cat_id) FROM categories'); 
                $idnouvellecategorieresultat = $idnouvellecategorierequete ->fetch(PDO::FETCH_COLUMN); // requete pour trouver l'ID correspondant à la nouvelle catégorie
                // var_dump($idnouvellecategorieresultat); // check variable effectué ok
                }

                
       else
                {
                        echo 'Merci de nommer la nouvelle catégorie ou sélectionner une vatégorie existante <br>';
                }
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
                echo "description valide : $description, <br> nombres de termes rentrés: ".strlen($_POST['description'])."<br>";
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
                echo"couleur valide: $couleur<br>";

        }

        // check PHOTO


        // if(is_null($_POST['photo'])) //si aucun fichier n'a été chargé alors garder la photo enregistrée

        if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) 
                {
                        $check08 = true; // la photo chargée est correcte donc on peut valider formulaire
                        echo "la photo du produit a été conservée <br>";
                }
                
        else 
                {        // On met les types autorisés dans un tableau (ici pour une image)
                        $extMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
                
                        // On extrait le type du fichier via l'extension FILE_INFO
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mimetype = finfo_file($finfo, $_FILES["photo"]["tmp_name"]);
                        finfo_close($finfo);
                        if (in_array($mimetype, $extMimeTypes))
                                {
                                        $check08 = true; // Le type est parmi ceux autorisés, donc , on va pouvoir déplacer et renommer le fichier 

                                                // tranfert  PHOTO
                
                                        // var_dump($_FILES); // visualisation des caractéristiques de l'image, mis en commentaire
                                        $nominitialimage = $_FILES['photo']['name']; // variable nom de l'image initiale
                                        // var_dump($nominitialimage);
                                        $extensionfichier = pathinfo($nominitialimage, PATHINFO_EXTENSION); // variable pour capturer l'extension du fichier
                                        // var_dump($extensionfichier);
                                        // var_dump($id);
                                        // move_uploaded_file($_FILES["photo"]["tmp_name"], "./public/images/$id.$extensionfichier"); // bouger l'image du temporaire  à l'emplacement voulu et avec le nom voulu
                                        move_uploaded_file($_FILES["photo"]["tmp_name"], "public/images/$id.$extensionfichier"); // bouger l'image du temporaire  à l'emplacement voulu et avec le nom voulu
                                } 
                        else 
                                {
                                echo "Type de fichier non autorisé";    
                                exit;
                                }
                }


/* note importante pou rles photos

                $_FILES['fichier']['name']
                    Contient le nom d'origine du fichier 

                $_FILES['fichier']['tmp_name']
                    Nom temporaire du fichier dans le dossier temporaire du système 

                $_FILES['fichier']['type']
                    Contient le type MIME du fichier 

                $_FILES['fichier']['size']
                    Contient la taille du fichier en octets 
                    
                $_FILES['fichier']['error']
                    Code de l'erreur (le cas échéant) (disponible à partir de php 4.2.0) 
*/



        // check  BOUTON RADIO BLOQUE non nécessaire car donnée reportée du fichier détails

                                        //bl   VERIFICATION et MISE EN TABLEAU des variables 

$tab = [];

// var_dump($idcategorieexistante);
// var_dump($_POST['categorie']);

if (isset($_POST["id"]))
        $tab["id"] = (int) $_POST["id"];

if (isset($_POST["reference"]))
        $tab["reference"] = $reference;


// var_dump($idcategorieexistante); // check variable effectué ok


if ($_POST['categorie'] == "autre") // si le choix du select est "autre"

// rappel: categorie nouvelle: id = $idnouvellecategorieresultat nom = $nouvellecategorie
        {         
                if (isset($idnouvellecategorieresultat))
                $tab["categorie"] = $idnouvellecategorieresultat; // numéro d'ID correspondant à l'éventuelle nouvelle catégorie rentrée
//var_dump($tab["categorie"]);

        }
        
if ($_POST['categorie'] != "autre") // si le choix du select est "autre"

// rappel: categorie existante: id = $idcategorieexistante nom = $nomcategorieexistanteresultat
        { 
                if (isset($idcategorieexistante))
                        $tab["categorie"] = intval($idcategorieexistante);
        //var_dump($tab["categorie"]);
        }

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

if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) 
                {
                if (isset($extensionfichier))
                        $tab["photo"] = $extensionfichier; //stocke l'extension de la photo dans le tableau pour transfert
                }

if (isset($_POST["boutonbloque"]))
        $tab["boutonbloque"] = $_POST["boutonbloque"];


if (isset($_POST["modification"]) || empty($_POST["modification"]))
        $tab["modification"] = date("Y-m-d H:i:s");

                                                //bl REQUETE DE MODIFICATION DE DONNEES


if ($check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 = $check08 == true)
        {
        /*require ("connexionDB.php"); // lien avec connexion de la fonction
        $db = connexionBase(); // Appel de la fonction de connexion*/
        if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) // condition si image non chargée
                {
        $requete = $db->prepare('UPDATE `produits` SET pro_ref=:pro_ref, pro_cat_id=:pro_cat_id, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque WHERE `produits`.pro_id=:pro_id');
                }
                else
                {
        $requete = $db->prepare('UPDATE `produits` SET pro_ref=:pro_ref, pro_cat_id=:pro_cat_id, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_photo=:pro_photo, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_d_modif, pro_bloque=:pro_bloque WHERE `produits`.pro_id=:pro_id');                                  
                }
        $requete->bindValue(":pro_id", $tab["id"]);
        $requete->bindValue(":pro_ref", $tab["reference"]);
        $requete->bindValue(":pro_cat_id", $tab["categorie"]); 
        $requete->bindValue(":pro_libelle", $tab["libelle"]);
        $requete->bindValue(":pro_description", $tab["description"]);
        $requete->bindValue(":pro_prix", $tab["prix"]);
        $requete->bindValue(":pro_stock", $tab["stock"]);
        $requete->bindValue(":pro_couleur", $tab["couleur"]);
        if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))  // condition si image non chargée
                {
                        echo "photo existe et a été chargée";
                }
                else
                {
                 $requete->bindValue(":pro_photo", $tab["photo"]);
                }
        $requete->bindValue(":pro_d_modif", $tab["modification"]);
        $requete->bindValue(":pro_bloque", $tab["boutonbloque"]);
        $requete->execute();


        header('Location: liste.php'); // redirection vers liste.php
        }
else
        {
        echo "données n epeuvent être envoyées car non valides, merci de revenir au formulaire";
        }

?>

</body>


</html>



                                                             
 