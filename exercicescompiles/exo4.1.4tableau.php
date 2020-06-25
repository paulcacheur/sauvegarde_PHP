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
                //Exo 4.1 Quelle semaine a lieu la validation du groupe 19002 ?
                // Exo 4.2 Trouver la position de la dernière occurrence de Stage pour le groupe 19001.
                // Exo 4.3 Extraire, dans un nouveau tableau, les codes des groupes.
                // Exo 4.5 Combien de semaines dure le stage du groupe 19003 ?

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
);


// afficher une valeur d'un tableau à 2 dimension
                var_dump($a[19002]);

//juste lister les éléments dans le sous tableau a[1902]
                foreach ($a[19002] as $key => $value) 
                        { 
                                echo $key." : ".$value."<br>"; 
                        }

/* test pour trouver quelle semaine est la semaine de validation

                        for ($n = 0; $n < ((count($a[19002])+1); $n++)
                        {
                                $s++;
                                if ($a[19002][$n] = "Validation");

                                {
                                        echo $n;
                                        break; 
                                }
                        }
*/

// solution qui marche pour trouver quelle semaine est la semaine de validation
$n = 0;
                foreach ($a[19002] as $key => $value) 
                { 

                        if ($value == "Validation")
                        {
                                $n = $key;
                                echo "la semaine de validation est la semaine :".$n;
                                break; 
                        }   
                }




/*

*/
                // fin balise PHP
                ?>

                
                </div>
</div>




</body>
</html>

