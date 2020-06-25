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

                $tab = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350); 

                $total_annuel = 0;

                foreach ($tab as $value) 
                { 
                echo $value." &euro;<br>"; 
                $total_annuel += $value;     
                } 

                foreach ($tab as $key => $value) 
                { 
                echo "Facture du mois de ".$key." : ".$value." €"."<br>"; 
                }   


echo "Total annuel de vos factures téléphoniques : ".$total_annuel." &euro;"; 

var_dump($tab);





$tab2 = array(
        "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
        );
var_dump($tab2);
print_r($tab2);
sprint($tab2);

                /* AUTRE EMETHODE saisie tableau
                $tab["Janvier"] = 500; 
                $tab["Février"] = 620; 
                */

                /* EXEMPLE  tableau à 2D
                $tab[] = array(1, "janvier", "2016"); 
                $tab[] = array(2, "février", "2017"); 
                $tab[] = array(3, "mars", "2018"); 
                $tab[] = array(4, "avril", "2019");
                */
        
                /*
                array_push(); permet d'ajouter un élément à la fin d'un tableau.
                array_pop(); Extrait le dernier élément d'un tableau et le supprimé du tableau
                array_unshift(); Ajoute un ou plusieurs éléments en début de tableau 
                array_shift(); Dépile un élément (et un seul) en début du tableau
                unset(); Pour retirer un élément d'un tableau, quelque soit sa position eg unset($tab[2]);
                La fonction sort(); permet de trier dans l'ordre alphabétique les données de type chaîne d'un tableau eg 
                
                $prenoms = array("Franck", "Laurent", "Caroline", "Magali", "Véronique");   

                        rsort($prenoms);

                        for ($i = 0; $i <= count($prenoms)-1; $i++) 
                        {
                        echo ".$prenoms[$i]."<br>";
                La fonction asort() Tri croissant trie le tableau array de telle manière que la corrélation entre les index et les valeurs soit conservée. 
                        L'usage principal est lors de tri de tableaux associatifs où l'ordre des éléments est important. 
                La fonction arsort() Tri décroissant trie le tableau array de telle manière que la corrélation entre les index et les valeurs soit conservée. 
                        L'usage principal est lors de tri de tableaux associatifs où l'ordre des éléments est important.                      
                        
                        
                        
                        
                        
                        */

                // fin balise PHP
        ?>



                </div>
</div>




</body>
</html>

