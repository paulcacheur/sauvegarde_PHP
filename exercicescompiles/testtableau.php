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
        

        $tab1["Nom"] = 'Mathilde'; // méthode 1
        $tab1["mail"] = '@';
         
        $tab2= array('Nom' =>'David', 'Mail' => '@test.fr'); // méthode 2
         
        $tabform = array("personne 1" => $tab1, "personne 2" => $tab2);
        var_dump($tabform);
        print_r($tabform);

                // fin balise PHP
                ?>



                </div>
</div>




</body>
</html>

