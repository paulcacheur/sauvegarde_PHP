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

        <?php //balise ouverture PHP

//Exercice 1 Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
//Exercice 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
// Exercice 3 Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant 
// Exo 3

                echo'
                <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered small border-dotted">
                                <thead class="thead-dark">
                                        <tr>
                ';
                                $hor = 0;
                                $ver = 0;

                                        for ($hor = 0; $hor < 13; $hor++)
                                        {
                                                echo '<th>'.$hor.'</th>';
                                        }

                echo'
                                        </tr>
                                </thead>

                                <tbody class="table-striped-danger">
                                        <tr>
                ';  
                                        for ($hor = 0; $hor < 13; $hor++)
                                        {
                                                echo '<tr></tr>';

                                                for ($ver = 0; $ver < 13; $ver++)
                                                {
                                                echo '<th>'.$hor *$ver.'</th>';
                                                }       
                                        }

                echo'
                                        </tr>
                                </tbody>    
                        </table>
                </div>
                ';

        //balise ouverture PHP
        ?> 


        </div>
                                        <!-- 
                       
                                                $arr=range(0,12); 
                                                foreach($arr as $elem)
                                                {
                                                echo "<tr><td>".$elem."</td></tr>";
                                                }
                                        -->

<!-- intégration jQuery first, then Popper.js, then Bootstrap JS 
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    --> 

<!-- intégrer un fichier js 
<script src="public/js/javascript.js"></script>--> 

</body>
</html>

