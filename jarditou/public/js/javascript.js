

                                        // ******** 

                            // ? FONCTION VALIDATION DE SUPPRESSION PRODUIT suppression.php
                            
                                        // ******** 


var suppression= document.getElementById("suppression"); // va cherche le bouton avec l'ID "suppression"
suppression.addEventListener("click",suppressionproduit); // active la fonction suppressionproduit si on click sur le bouton
function suppressionproduit()

{
    var reponse = window.confirm("êtes vous sur de vouloir supprimer les données?");
    if (reponse == true)
        {
            alert("test oui ok");

                    // envoyer le formulaire
            var pro_id = document.getElementById("ID").value; // va chercher la valeur du pro_ID dnas le formulaire via son ID
            // console.log(pro_id); vérification is en commentaire

            // location.href="suppression.php?pro_id="+pro_id; // instruction de se rendre à la page suppression.php?pro_id="valeur du pro_id récupéré" puis à la page index.php (lien sur page suppression.php)
        }
        else        
        {
            alert("test non ok");
            location.href="index.php";
        }
}

                                    // ******** 

                        // ? check remplissage formulaire jarditou (ex 5 - JS 16 - les formulaires) contact.php

                                    // ******** 


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

revueform.submit(); // envoie le submit après la revue de formulaire







