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
                // Exo 4.3 Extraire, dans un nouveau tableau, les codes des groupes
                // Exo 4.5 Combien de semaines dure le stage du groupe 19003 ?

                $a = array(     "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", " test", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
                                "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
                                "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
                );

                echo $a[19001][6]; // donne "test" en position 6 de la sous table 19001

                // création d'un tableau sous_a
                $sous_a = [];

                // boucle pour que sous_a corresponde aux codes des groupes


                        $sous_a = array_keys($a);
                        print_r($sous_a);
      
        /*
                foreach (array_keys($a) as $value)
                { 

                }

                        if ($value == "Stage")
                        {
                                $n = $key;
                                echo "une  semaine de stage se déroule la semaine :".$n."<br>";
                                $max = $n;
                        } 
                }


                foreach ($a[19002] as $key => $value)

                { 
                        if ($value == "Stage")
                        {
                                $n = $key;
                                echo "une  semaine de stage se déroule la semaine :".$n."<br>";
                                $max = $n;
                        } 
                }



 //action="index.php" pur appliquer sur button submit

/* syntaxe tableau


$tab = array(array(1, "janvier", "2016"), 
             array(2, "février", "2017"), 
             array(3, "mars", "2018"), 
             array(4, "avril", "2019")
             );
echo $tab[2][0]; affiche 3 mars 2018

*/

                // fin balise PHP
                ?>

                </div>
</div>




</body>
</html>

