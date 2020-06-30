<!DOCTYPE html>
<html lang="fr">
    

<head>

  <!-- nomenclature caractères-->
        <meta charset="UTF-8">

  <!-- titre du doc -->
<title>index.html</title>

<!-- interface responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">


<!-- lien avec CDN bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      

</head>

<body>

<div class="container">

                <div class="row my-3 mx-auto">

                
                <?php // début balise PHP
        
                        // fonciton ISSET
$var = '';
 
// Ceci est vrai, alors le texte est affiché
if (isset($var)) 
        {
	echo 'Cette variable existe, donc je peux l\'afficher.';
        }
 
// Dans les exemples suivants, nous utilisons var_dump() pour afficher 
// le retour de la fonction isset().
 // donne valeur true au booléen car la variable existe et n'est pas nulle 
$a = 'test';
$b = 'anothertest';
 
var_dump(isset($a));	  // TRUE
var_dump(isset($a, $b)); // TRUE
 

 // donne valeur false au booléen car la variable $a a été ramenée à indéfinie 
unset ($a);
 
var_dump(isset($a));	 // FALSE
var_dump(isset($a, $b)); // FALSE
 
 // donne valeur false au booléen car la variable $foo ets nulle
$foo = NULL;
var_dump(isset($foo));   // FALSE


/*Fonciton Preg_match

preg_match (motif_a_detecter, chaine_a_traiter, tableau_reponse, debut_de_la_recherche)
Le paramètre motif_a_detecter correspond à l’expression régulière que l’on recherche.
Le paramètre chaine_a_traiter correspond à la chaîne de caractères que nous voulons analyser
Le paramètre tableau_reponse est facultatif. S’il est renseigné, la fonction preg_match() retournera une réponse sous forme de tableau multidimensionnel avec comme premier élément (indice 0) un tableau comprenant 2 éléments: le motif recherché (indice 0) et la position de la première occurrence trouvée (indice 1). La fonction preg_match() s’arrête dès qu’une occurrence est détectée.
Si le paramètre debut_de_la_recherche est renseigné, la recherche commencera à partir de l’indice fourni dans ce paramètre

*/
// Exemple 1

$chaine = 'développement php';
$motif = '/php/';
preg_match($motif, $chaine, $answer, PREG_OFFSET_CAPTURE);
print_r($answer);

/* Affiche
Array (
       [0] => Array (
                    [0] => php
                    [1] => 14
                   )
       ) */

// Exemple 2

$chaine = 'Pour tout savoir sur le développement en php';
$motif = '/php/';
if(preg_match($motif,$chaine)){
  echo 'Le motif  <em>' . $motif . '</em> est bien présent dans la chaîne analysée.';
}

/* Affiche
"Le motif /php/ est bien présent dans la chaîne analysée." */





                // fin balise PHP
                ?>



                </div>
</div>




</body>
</html>

