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

        // NOM aller chercher la donnée avec le name = nom dans le formulaire envoyé


        if (empty($_POST['nom']))
                {
                        echo "un nom doit être renseigné<br>";
                }
        else
                {
                        $nom = $_POST['nom'];
                        echo "le nom renseigné est valide<br>";
                        echo"nom soumis dans formulaire: $nom<br><br>";
                }


        // PRENOM aller chercher la donnée avec le name = prenom dans le formulaire envoyé
 
        if (empty($_POST['prenom']))
                {
                        echo "un prenom doit être renseigné.<br>";
                }
        else
                {
                        $prenom = $_POST['prenom']; 
                        echo "le prenom renseigné est valide.<br>";
                        echo"prenom soumis dans formulaire: $prenom.<br><br>";
                }



        // GENRE - aller chercher le tableau avec le name = "genre[]"  dans  le formulaire envoyé

                        if (empty($_POST["genre"]))
                        {
                                echo "un genre doit être précisé.<br>";
                        }
                else
                        {
                                $genre = $_POST["genre"];
                                echo "un genre a été précisé.<br><br>";
                                echo"genre soumis dans formulaire: $genre.<br>";
                        }

        // DATE DE NAISSANCE aller chercher la donnée avec le name = ddn dans le formulaire envoyé PB PB PB
 
//jj/mm/aaaa
//pour check date format mm/jj/1975

        $ddn = $_POST['ddn'];

  
                                                // check que ce sont bien 5 nombres nombres
                                    
                        if (preg_match( "/^([0-3][0-9])(\/)([0-9]{2,2})(\/)([0-3]{4,4})$/", $ddn) == true)
                                        {
                                        echo 'La date n\'est pas au format JJ/MM/AAAA.<br>';
                                        } 
                                                // check format de date correcte

                                else if (checkdate(intval(substr($ddn,3,2)),intval(substr($ddn,0,2)),intval(substr($ddn,6,4))) == false)
                                        {
                                        echo 'La date n\'est pas au format grégorien.</p>';
                                        }

                                        else    
                                {
                                        echo "une date correcte a été précisée.<br>";
                                        echo"date saisie dans formulaire: $ddn.<br>";                                  
                                }
                                        
                                    
                                  
                                  


        /* solution Fabien


                $date=date('Y-m-d');

                        if(empty(checkdate($_POST['ddn']))
                        {

                                        echo"renseigner date","<br>";
                        }
                        else
                        {
                                $naissance = checkdate($_POST['ddn']))
                                if($naissance>$date)
                                {
                                echo"la date de naissance est supérieure à la date du jour","<br>";
                                }
                                else
                                {
                                echo"la date de naissance est valide","<br>";
                                }
                        }
*/




        // CODE POSTAL aller chercher la donnée avec le name = codepostal dans le formulaire envoyé PB PB PB 
                        
                // vérification qu'il y a bien 5 caractères

$cp = $_POST['codepostal'];

                if ( preg_match ( " /^[0-9]{5,5}$/ " , $cp ) == true)
                        {
                                echo "le code postal est valide et enregistré en tant que : $cp.<br>";
                        }
                else
                        {
                                echo "le code postal doit être renseigné avec 5 caractères numériques.<br>";
                        }


/*
sinon reprise des conditiosn comme utilisées dans javascript
                                // transforme la chaine de caractère en entier
                                intval($_POST['codepostal']); 

                                // vérification que ce n'est pas un nombre
                                if (is_nan($_POST['codepostal'])!=true)

                                if (cptaille == 5 && isNaN(codepostal)!= true)
*/



        // ADRESSE aller chercher la donnée avec le name = add dans le formulaire envoyé

                if (empty($_POST['add']))
                {
                        echo "une adresse doit être renseignée.<br>";
                }
                else
                {
                        $adresse = $_POST['add'];  
                        echo "l'adresse renseignée est valide.<br>";
                        echo"adresse soumise dans formulaire: $adresse.<br><br>";
                }


        // VILLE aller chercher la donnée avec le name = city dans le formulaire envoyé


                if (empty($_POST['city']))
                {
                        echo "une ville doit être renseignée.<br>";
                }
                else
                {
                        $ville = $_POST['city'];  
                        echo "la ville renseignée est valide.<br>";
                        echo"ville soumise dans formulaire: $ville.<br><br>";
                }



        // EMAIL aller chercher la donnée avec le name = mail dans le formulaire envoyé
                $email = $_POST['mail'];  
                echo"email soumis dans formulaire: .$email.<br>"; 
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
                        {
                                echo "L'adresse email '$email' est considérée comme valide.<br>";
                        }
                        else 
                        {
                                echo "L'adresse email '$email' est considérée comme invalide.<br>";
                        }







        // SECTION INFORMATION aller chercher la donnée avec le name = select dans le formulaire envoyé

        if (empty($_POST['select']))

                {
                        echo "une selection doit être faite.<br>";
                }
        else
                {
                        $select = $_POST["select"];
                        echo "une selection a été précisée.<br><br>";
                        echo"selection soumise dans formulaire: $select.<br>";
                }




/*pour une checkbox (choix multiple possible: Lecture du tableau de réponse select
foreach ($POST["Fjour"]) as $select)      
        { 
        echo"- $select<br>"; 
        } 

*/

 // SECTION TEXTE(AREA) aller chercher la donnée avec le name = textarea dans le formulaire envoyé

if  ($select == 4)
        {
                if (empty($_POST['textarea']))
                {
                        echo "une question doit être formulée si la sélection autre a été choisie.<br>";
                }
                else
                {
                        $textarea = $_POST['textarea'];  
                        echo"question soumise dans formulaire pour select =4: $textarea.<br>";
                }

        }


 
// SECTION TRAITEMENT FORM aller chercher la donnée avec le name = acceptetraitement dans le formulaire envoyé

        if (isset($_POST['acceptetraitement']))

                {
                echo "la case a été cochée.<br>";
                $accepttraitement = $_POST['acceptetraitement'];
                }

        else

                {
                echo 'Vous n\'avez pas coché la case.';
                }




/*

$traitement = $_POST['acceptetraitement'];  
echo"traitement soumis dans formulaire: .$traitement.<br>"; 


Si la checkbox est cochée, $_POST['name_checkbox'] existe, dans le cas contraire, elle n'existe pas, 
un simple isset() suffira donc.
if (isset($_POST['ma_case_a_cocher']))
{
    echo $_POST['ma_case_a_cocher']; // Affiche : "on"
}
else
{
    echo 'Vous n\'avez pas coché la case.';
}
*/
/*
                        foreach ($_POST["genre"] as $genre)      
                        { 
                        }
*/


                // fin balise PHP
                ?>


<!-- //CREATION DU TABLEAU de stockage des données soumises  


$tab1["Nom"] = $nom; 
$tab1["Prénom"] = $prenom ;
$tab1["Sexe"] = $genre; 

$tabform = array("utilisateur 1" => $tab1, "utilisateur 2" => $tab2);
var_dump($tabform);
print_r($tabform);


$tab1["Nom"] = 'Mathilde'; // méthode 1
$tab1["mail"] = '@';
 
$tab2= array('Nom' =>'David', 'Mail' => '@test.fr'); // méthode 2
 
$tabform = array("personne 1" => $tab1, "personne 2" => $tab2);
var_dump($tabform);
print_r($tabform);


-->



                </div>
</div>


</body>

</html>