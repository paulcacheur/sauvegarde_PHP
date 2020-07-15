
                            // bl FONCTION VALIDATION DE SUPPRESSION PRODUIT provient de produitdetails.php et renvoi vers suppression.php
                            


function suppressionproduit()
{
    var reponse = window.confirm("êtes vous sur de vouloir supprimer les données?");
    if (reponse == true)
        {
            // envoyer le formulaire
            //var pro_id = document.getElementById("id").value; // va chercher la valeur du pro_ID dnas le formulaire via son ID
            // console.log(pro_id); vérification is en commentaire
            // location.href="suppression.php?pro_id="+pro_id; // instruction de se rendre à la page suppression.php?pro_id="valeur du pro_id récupéré" puis à la page index.php (lien sur page suppression.php)
            return;
        }
        else        
        {
            alert("nous vous redirigeons vers la liste des produits");
            location.href="liste.php";
            return false;
        }
}

                        // bl RENSEIGNEMENT DES INFO DE LA NOUVELLE CATEGORIE dans produitmodificationform


selectcat = document.getElementById("categorie"); // variable select est la valeur du champ "catégorie" (liste du formulaire)
selectcat.addEventListener("change",apparitionform); // active la fonction apparititionform si la valeur est changée
function apparitionform()
    {
        selectcatvalue = document.getElementById("categorie").value;
        ajoutdecat = document.getElementById("ajoutdecat");  // variable ajoutdecat est la valeur de la div "ajoutdecat" = div du formulaire avec le formulaire qui apparait
        ajoutdecatinput = document.getElementById("ajoutdecatinput");
        if (selectcatvalue == "autre")
                        {
                            ajoutdecat.classList.remove("d-none"); //enlève la class d-none à la valeur du champ pour qu'il soit rempli par l'utilisateur
                            
                        }
            else
                        {
                            ajoutdecat.classList.add("d-none"); //enlève la class d-none à la valeur du champ pour qu'il soit rempli par l'utilisateur
                            ajoutdecatinput.value = null;
                        }
                        return;
    }

                        // bl check remplissage formulaire jarditou (ex 5 report de la partie -  JS 16 - les formulaires) contact.php (check PHP non fait)

var revueform = document.getElementById("formulairedecontact"); // lien avec formulaire de contact
revueform.addEventListener("click", checkform);

/* si on veut que cela marche avec le bouton exo final 5

var bouton5 = document.getElementById("bouton5");
bouton5.addEventListener("click", checkform);

*/
function checkform()

{// ouverture fonction du bouton

    var nom = "x";
    var prenom;
    var sexeM = false;
    var sexeF = false;
    var dob;
    var adresse;
    var ville;
    var email;
    var select;
    var question;

        //validation formulaire NOM

    nom = document.getElementById("nom").value ;
    console.log ("nom : " + nom);
    console.log ("longueur : " + nom.length);


        if (nom.length<1)
            {
                window.alert("le champ 'nom' est obligatoire");
            }

         //validation formulaire PRENOM

    prenom = document.getElementById("prenom").value ;
    console.log ("prenom : " + prenom);


        if (prenom.length<1)
            {
                alert("le champ 'prenom' est obligatoire");
            }


         //validation formulaire SEXE


    sexeM  = document.getElementById("sexeM").checked ;
    sexeF  = document.getElementById("sexeF").checked ;
    console.log ("sexeM : " + sexeM);
    console.log ("sexeF : " + sexeF);

        if(sexeM == false && sexeF == false)
            {
                alert("le champ 'Sexe' est obligatoire");
            }


         //validation formulaire DOB


    dob = document.getElementById("dob").value ;
    console.log ("dob : " + dob);


 // METHODE expression régulière pour cadrer le format général

    var dob = new RegExp("/^[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9]$/");
    var resultat = dob.test("javascript");



            // Validation champ Code Postale

    codepostal = document.getElementById("codepostal").value ;
    console.log ("codepostal : " + codepostal);

    var cptaille = 0;
    var checkcp = false; //booléen

    cptaille = codepostal.length;
    console.log(codepostal.length); // véification taille du code
    codepostal = parseInt(codepostal); //conversion du CP en numérique
    console.log("code postale : " + codepostal + "type of : " + typeof codepostal + "length " + cptaille);

            if (cptaille == 5 && isNaN(codepostal)!= true)

                {
                    checkcp = true;
                }

            else 
                {
                    window.alert("Le code postal doit comprendre 5 caractères numériques.");
                    checkcp = false;
                }

                // Validation champ adresse

    adresse = document.getElementById("adresse").value ;
    console.log ("adresse : " + adresse);

    if (adresse.length<1)
    {
        window.alert("le champ 'adresse' doit être renseigné");
    }

                // Validation champ ville

    ville = document.getElementById("ville").value ;
    console.log ("ville : " + ville);

    if (ville.length<1)
    {
        window.alert("le champ 'ville' doit être renseigné");
    }

                // Validation champ email

    email = document.getElementById("email").value ;
    console.log ("email : " + email);
    var checkcemail= false; //booléen

            if (email.indexOf("@") != -1) //check si le caractère @est présent

                { 
                    checkcemail = true;
                } 

            else

                {
                    window.alert("L'adresse mail doit comporter un caractère '@'.");
                    checkcemail = false;
                }


                // Validation champ sélect


    select  = document.getElementById("select").value ;
    console.log ("select : " + select);
    var checkselect = false; //booléen

                    // VALIDATION CHOIX SUJET


                if (select == "Mes commandes" || select == "Question sur un produit" || select == "Réclamations"  || select == "Autres")
                    {
                        checkselect = true;

                                // si le choix est fait, alors cela doit apparaitre dans la box
                              // condition pour éviter écrasement des données par select si un commentaire rentré
                                if (document.getElementById("question").value ="")

                                {
                                    document.getElementById("question").value = select;
                                }
  
                    }

                    else

                    {
                        window.alert("merci de renseigne un Sujet");
                        checkcemail = false;
                    }

                    // VERIFICATION de la CASE COCHEE

    question = document.getElementById("defaultCheck1").checked ;
    console.log ("question : " + question);
    var checkcheckbox = false;


            if (question == true) //check si la check box est bien cochée
                { 
                    checkcheckbox = true;
                } 

            else

                {
                    window.alert("Vous devez autoriser le traitement du formulaire");
                    checkcheckbox = false;
                }

                /*
                
validation avec apparition message en cas d'erreur dans le formulaire avec d-none
element.classList.remove("d-none");


Autre option = créer un span vide avec un ID 
et le remplir dans javascript

                */ 


}// fermeture fonction du bouton

revueform.submit(); //^envoie le submit après la revue de formulaire


                                            // ? TEST REVUE FORMULAIRE MODIFICATION produitmodificationform


                             /*               
                                            
    window.addEventListener("load", lancementaddeventlistener) // lance les addeventlistener des champs au chargement de la page

    function lancementaddeventlistener
    {

        categorievalue.addEventListener("change", verifcategorie);
        referencevalue.addEventListener("change", verifreference);
        libellevalue.addEventListener("change", veriflibelle);
        descriptionvalue.addEventListener("change", verifdescription);
        prixvalue.addEventListener("change", verifprix);
        stockvalue.addEventListener("change", verifstock);
        couleurvalue.addEventListener("change", verifcouleur);
        photoextvalue.addEventListener("change", verifphotoext);
        radiobloque1value.addEventListener("change", verifradiobloque1);
        radiobloque2value.addEventListener("change", verifradiobloque2);
    }

    function surligne(champ, erreur)
    {
        if (erreur)
                {
                champ.style.backgroundColor = "#fba";
                }
        else
                {
                champ.style.backgroundColor = "#FFFFFF";
                }
    }


    var val01 = val02 = val03 = val04 = val05 = val06 = val07 = val08 = false;// variables booléennes de validation
    var erreur = false; // variable de changement de couleur si une variable val = false

    //$ CATEGORIE

    var categorie = 0;
    var categorie = document.getElementById("categorie") ;
    var categorievalue = categorie.value;
    var message1 ="x";

    function verifcategorie()
{
    if(categorievalue.length < 1 || categorievalue.length > 10)
            {
                val01 =false;
                categorievalue.textContent = message1;
                surligne(true); // le booleen erreur de la fonction sruligne est true donc la couleur va être changée en conséquences
                return val01;
            }
else
            {
                status = true;
                document.getElementById("validation").textContent = message1;
                //  categorie.classlist.remove("d-none");
                surligne(champ, false);
                return val01;
            }
}
var verifcategorie = verifcategorie();

    // $ REFERENCE

    var reference = "x";
    var reference = document.getElementById("reference");
    var referencevalue = reference.value;
    var message2 ="x";


    function verifcategorie()
    {
        if(categorievalue.length < 1 || categorievalue.length > 10)
                {
                    val01 =false;
                    categorievalue.textContent = message1;
                    surligne(true); // le booleen erreur de la fonction sruligne est true donc la couleur va être changée en conséquences
                    return val01;
                }
    else
                {
                    status = true;
                    document.getElementById("validation").textContent = blanc;
                    surligne(champ, false);
                    return val01;
                }
    }
    var verifcategorie = verifcategorie();
    

    //$ LIBELLE

    var libelle = "x";
    var libelle = document.getElementById("libelle");
    var libellevalue = libelle.value;
    var message3 ="x";

    //$ DESCRIPTION

    var description = "x";
    var description = document.getElementById("description");
    var descriptionvalue = description.value;
    var message4 ="x";

    //$ PRIX

    var prix = 0;
    var prix = document.getElementById("prix");
    var prixvalue = prix.value;
    var message5 ="x";

    //$ STOCK

    var stock = 0;
    var stock = document.getElementById("stock");
    var stockvalue = stock.value;
    var message6 ="x";

    //$ COULEUR

    var couleur = "x";
    var couleur = document.getElementById("couleur");
    var couleurvalue = couleur.value;
    var message7 ="x";

    //$ PHOTOEXT

    var photoext = "x";
    var photoext = document.getElementById("photoext");
    var photoextvalue = photoext.value;
    var message8 ="x";

    // var photo = "image";  variable pour le fichier télécharger non pertinente
    // photo = document.getElementById("photo").value ; fichier à télécharger

    // $ Boutons RADIO BLOQUE
    var radiobloque1 = "x";
    var radiobloque2 = "x";
    var radiobloque1 = document.getElementById("radiobloque1");
    var radiobloque1value= radiobloque1.value ;
    var radiobloque2 = document.getElementById("radiobloque2");
    var radiobloque2value = radiobloque2.value;
    var message9 ="x";

    






//d-none danbs class
// remove d-none
// libelle.classlist.remove("d-none");

*/