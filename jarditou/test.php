<?php

include("entete.php");

require "connexionDB.php"; // Inclusion de notre bibliothèque de fonctions


// une requete PDO Représente une requête préparée et, une fois exécutée, le jeu de résultats associé.

$db = connexionBase(); // Appel de la fonction de connexion en PDO
var_dump($db);

$requete = "SELECT * FROM produits"; //  FORMULE LA REQUETE
var_dump($requete);

$result = $db->query($requete); // EXECUTE LA REQUETE PDO::query — Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
var_dump($result);

$produit = $result->fetch(PDO::FETCH_OBJ); // RECUPERE LES DONNEES - FETCH = méthode de récupération, Renvoi de l'enregistrement sous forme d'un objet
var_dump($produit);

$produit = $result->fetch(PDO::FETCH_NAMED); // Renvoi de l'enregistrement sous forme d'un tableau
var_dump($produit);

/*foreach($db->query('SELECT * from produits') as $row) 
{
  print_r($row);
}
*/


// Formulaire Photo

'
<div class="row form-group  my-2 mx-auto">
<label for="photo" class="  col-sm-12 col-form-label align-self-center py-2">photo:</label>
        <div class="col-sm-12 px-0">
        <input type="file" name="fichier" id="photo"  placeholder="photo"> 
        </div>
</div>'


// verirication qu'il n'y a pas d'erreur


if (sizeof($_FILES["fichier"]["error"]) > 0) 
    { 
      echo "ok"; 
    } 
    else
    {
      echo "pas ok";
    }

                  // VERIFICAITON QU'une image importée est correcte

//PHP fournit un extension nommée FILE_INFO qui fait référence en termes de sécurité. Voici comment l'utiliser, pour un type :

// On met les types autorisés dans un tableau (ici pour une image)
$tabextensionmimetype = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_anciennom"]);
finfo_close($finfo);

if (in_array($mimetype, $tabextensionmimetype))
{
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir  déplacer et renommer le fichier */

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    



//déplacerle fichier:  fichier (de type image) de tmp vers un répertoire nommé images d'un projet :

move_uploaded_file($_FILES["fichier"]["tmp_name"], "public/images/photo.jpg");      

//  et renomme le  fichier
//// Lit le dernier dossier dans le chemin $_FILES["fichier"]["nouveaunom"] 

$extension = substr(strrchr($_FILES["fichier"]["nouveaunom"], "."), 1); //strrchr trouve la première occurence commanceant par "." Vs substr = retourne un segment de chaine



// DROIT D'UTILISATION
// Lecture et écriture pour le propriétaire, lecture pour les autres - r(ead) -4 / w(rite)-2 / x(xecute)-1
// user 6, group 4 et world 4
chmod("/somedir/somefile", 0644);




/*Exemple #2 Validation de téléchargement de fichiers

          <?php
                    $uploaddir = '/var/www/uploads/';
                    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

                    echo '<pre>';
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                        echo "Le fichier est valide, et a été téléchargé
                              avec succès. Voici plus d'informations :\n";
                    } else {
                        echo "Attaque potentielle par téléchargement de fichiers.
                              Voici plus d'informations :\n";
                    }

                    echo 'Voici quelques informations de débogage :';
                    print_r($_FILES);

                    echo '</pre>';

          ?>


           Le fichier uploadé est disponible via le tableau global $_FILES ($HTTP_POST_FILES si vous êtes avec php < 4.1.0) ou directement avec le nom que l'on a donné au formulaire si registar_globals est fixé à on dans la configuration de php.
Nous avons alors les variables suivantes (avec ici "fichier" pour le nom du champ de type file) :

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


<!-- Exemple #1 Formulaire de chargement de fichier -->

ex de codage HTML de loading de fichier
<!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="_URL_" method="post">
  <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  <input type="submit" value="Envoyer le fichier" />
</form>