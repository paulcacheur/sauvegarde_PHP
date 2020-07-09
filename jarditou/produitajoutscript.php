

        <!-- EN TETE -->

        <?php

        // post venant du fichier produitajoutformulaire

              include("entete.php");

              require ("connexionDB.php"); // lien avec connexion de la fonction
              $db = connexionBase(); // Appel de la fonction de connexion


                                                // VALIDATION DU FORMULAIRE ID, cat, ref, lib, desc, prix, stock, couleur, photo, ajout modif, bloqué


// vérfie la validité champs du formulaire avec un booléen

$check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 = $check08 = $check09 = false;

//pas de vérificaiton pour ID car readonly $id = $_POST['id'];


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

// check champ référence: check uniquement si non vide et nombre de caractères <10

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

// check champ libelle: check au moins un caractère et < 200
$libelle = $_POST['libelle'];
if (empty($_POST['libelle']) OR strlen($_POST['libelle'])>200)
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


// check champ prix: check 6 caractères dont 2 après la virgule

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


        // check champ stock: check nombre de 1 à 11 chffres
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


                                                                // COULEUR: check 1 à 30 caractère



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


// On met les types autorisés dans un tableau (ici pour une image)
$extMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["photo"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $extMimeTypes))
        {
                $check08 = true; // Le type est parmi ceux autorisés, donc , on va pouvoir déplacer et renommer le fichier 
        
        } 
else 
        {
        echo "Type de fichier non autorisé";    
        exit;
        }

                                        // tranfert  PHOTO
        

        // var_dump($_FILES); // visualisation des caractéristiques de l'image, mis en commentaire


        $nominitialimage = $_FILES['photo']['name']; // variable nom de l'image initiale
        //var_dump($nominitialimage);

        $extensionfichier = pathinfo($nominitialimage, PATHINFO_EXTENSION); // variable pour capturer l'extension du fichier
        //var_dump($extensionfichier);

        // requête pour avoir le max(id)+1 afin d'attribuer le nom de la photo = pro_id atribué par auto incrémentation
        $reponsemaxid = $db->query('SELECT max(pro_id) FROM produits');
        $resultmaxid = $reponsemaxid->fetch(PDO::FETCH_COLUMN);
        //var_dump($resultmaxid);

        $resultmaxidetun = $resultmaxid + 1;



        //var_dump($id);

        move_uploaded_file($_FILES["photo"]["tmp_name"], "public/images/$resultmaxidetun.$extensionfichier"); // bouger l'image du temporaire  à l'emplacement voulu et avec le nom voulu, nom du max id + 1. extension


/*
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


                // check  BOUTON RADIO BLOQUE 


if (is_null($_POST["boutonbloque"]) OR $_POST["boutonbloque"] == 0 OR $_POST["boutonbloque"] == 1)   // vérification qu'un choix a été fait

                {
                        $boutonbloque = $_POST["boutonbloque"];
                        $check09 = true;
                        echo "choix bouton radio valide: <br>";

                }
else
                {
                        $check09 = false;
                        echo "un bouton radio doit être coché <br>";
                }

                                        //   RECUPERATION, VERIFICATION et MISE EN TABLEAU des variables (pas besoin d'ID)

$tab = [];


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

        // rentrer le nom de la photo (= extension dans la DB)
if (isset($extensionfichier))
        $tab["photo"] = $extensionfichier;

        // pour l'ajout, renseigner la date du jour 

if (isset($_POST["ajout"]) || empty($_POST["ajout"]))
        $tab["ajout"] = date("Y-m-d H:i:s");

        // pour la Variable PRO_BLOQUE, value 1 ou 0

if (isset($_POST["boutonbloque"]))
        $tab["boutonbloque"] = $_POST["boutonbloque"];

                                          // AJOUT DES DONNEES DANS LE FORMULAIRE SI LES DONNEES SONT VALIDES


if ($check01 = $check02 = $check03 = $check04 = $check05 = $check06 = $check07 = $check08 == true)
        {
        /*require ("connexionDB.php"); // lien avec connexion de la fonction
        $db = connexionBase(); // Appel de la fonction de connexion*/
       
        //requête d'ajout des données sans pro_id car il est en auto_increment
        $requete = $db->prepare('INSERT INTO `produits` (`pro_ref`, `pro_cat_id`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_photo`, `pro_d_ajout`, `pro_bloque`) VALUES
        (:pro_ref, :pro_cat_id, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo, :pro_d_ajout, :pro_bloque);');
        $requete->bindValue(":pro_ref", $tab["reference"]);
        $requete->bindValue(":pro_cat_id", $tab["categorie"]);
        $requete->bindValue(":pro_libelle", $tab["libelle"]);
        $requete->bindValue(":pro_description", $tab["description"]);
        $requete->bindValue(":pro_prix", $tab["prix"]);
        $requete->bindValue(":pro_stock", $tab["stock"]);
        $requete->bindValue(":pro_couleur", $tab["couleur"]);
        $requete->bindValue(":pro_photo", $tab["photo"]);
        $requete->bindValue(":pro_d_ajout", $tab["ajout"]);
        $requete->bindValue(":pro_bloque", $tab["boutonbloque"]);
        $requete->execute();
        header('Location: liste.php'); // retour vers la page liste de la liste
        }
else
        {
        echo "données ne peuvent être envoyées car non valides cf messages d'erreur, merci de revenir au formulaire";
        }


  ?> 


        <!-- FOOTER -->
        
        <?php
        include("piedpage.php");





        /* autre approche pour VERIFICAITON QU'une image importée est correcte


$tabextensionmimetype = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff"); // On met les types autorisés dans un tableau (ici pour une image)
$finfo = finfo_open(FILEINFO_MIME_TYPE); // On extrait le type du fichier via l'extension FILE_INFO en tant que variable $finfo
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_nom"]);
finfo_close($finfo);

if (in_array($mimetype, $tabextensionmimetype)) // si le type du fichier correspond à la norme imposée
                {
                //Alors Le type est parmi ceux autorisés, donc OK, on va pouvoir  déplacer et renommer le fichier
                move_uploaded_file($_FILES["fichier"]["tmp_name"], "public/images/photo.jpg"); //déplacerle fichier:  fichier (de type image) de tmp vers un répertoire nommé images d'un projet :
                $extension = substr(strrchr($_FILES["fichier"]["nouveaunom"], "."), 1);  //  et renomme le  fichier// strrchr trouve la première occurence commanceant par "." Vs substr = retourne un segment de chaine
                } 
else 
                {
                // Le type n'est pas autorisé, donc ERREUR
                echo "Type de fichier non autorisé";    
                exit;
                }    

chmod("/somedir/somefile", 0644);

*/
   /* if (sizeof($_FILES["fichier"]["error"]) > 0) // check si erreur de téléchargement

                        {
                                echo "problème de chargement";
                        }


        $content_dir = 'public/images/'; // dossier où devra être déplacé le fichier photo

        $tmp_file = $_FILES['photo']['tmp_name']; //VERIFICATION DU BON TELECHARGEMENT du fichier avec son nom temporaire (création d'une variable pour le nom temporaire du fichier)
        var_dump($tmp_file);



        move_uploaded_file($tmp_file, $content_dir.$name_file) 


                if( !is_uploaded_file($tmp_file) )  //VERIFICATION DU BON TELECHARGEMENT du fichier 

                        {
                        exit("Le fichier est introuvable");
                        }

        $type_file = $_FILES['photo']['type'];  // VERIFICATION DE L'EXTENSION (création d'une variable pour le type MIME du fichier)

                if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )   // inverse de trouve la 1ere  occurrence dans un echaine (onom des extensions autorisées)
                        {
                        exit("Le fichier n'est pas une image");
                        }

// connexion à la DB et requête pour nommer le fichier en fonction de pro_id 
        

        $nomimage = $db->query('SELECT * FROM produits'); // requête pour nommer la photo en fonction du pro_id
        $resultatnom = $nomimage->fetch(PDO::FETCH_OBJ);

        $extensionfichier = pathinfo($tmp_file, PATHINFO_EXTENSION); // variable pour capturer l'extension du fichier
        var_dump($extensionfichier);

        $name_file = $_FILES['photo'][$resultatnom['pro_id'].".".$extensionfichier]; // création d'une variable pour le nom du fichier nom.extension
        var_dump($name_file);
        print_r($name_file);




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

        ?>



