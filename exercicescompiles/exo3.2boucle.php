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

      
<!-- top header, image logojarditout et paragraphe -->


        <div class="row my-3 mx-auto">
                 <div class="col-12 col-sm-3 my-auto"> 

                    <p>Exo 3 boucle</p>

                </div>
        </div>



        <div class="row my-3 mx-auto">

        <?php 

//Exercice 1 Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
//Exercice 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
// Exercice 3 Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant 
// Exo 2


                $n = 0;

                for ($a = 1; $a < 501; $a++)
                {
                        $n++;
                        echo $n."Je dois faire des sauvegardes régulières de mes fichiers"."<br>";
                }

        ?>

        </div>
                       

</body>
</html>

