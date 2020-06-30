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
        



        function calculator($data1, $data2) 
        {              

                // addition, soustraction, multiplication, division avec 3 chiffres après la virgule
                $somme = bcadd($data1, $data2, 3);
                echo "la somme des nombres est ".$somme."<br>";
                $soustraction = bcsub($data1, $data2, 3);
                echo "la différence des nombres est ".$soustraction."<br>";
                $multiplication = bcmul($data1, $data2, 3);
                echo "le produit des nombres est ".$multiplication."<br>";
                $division = bcdiv($data1, $data2, 3);
                echo "la division des nombres est ".$division."<br>";
                $retour = array($somme, $soustraction, $multiplication, $division);
                return $retour;
        }   
                $retour = calculator('1', '4');


 /*
        function calculator()
        {
          $num1 = 2;
          $num2 = 5;
          $deci = 2;
          echo "L'addition: " . bcadd($num1, $num2, $deci) . ". La soustraction: " . bcsub($num1, $num2) ".";
        }
        calculator();
*/

                // fin balise PHP
                ?>



                </div>
</div>




</body>
</html>

