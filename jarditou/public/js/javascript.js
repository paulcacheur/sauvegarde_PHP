
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
            var formsupp = document.getElementById("suppressionform");
            formsupp.submit();
            return;
        }
        else        
        {
            alert("nous vous redirigeons vers la liste des produits");
            location.href="liste.php";
            return false;
        }
}

                        // bl APPARITION CHAMP POUR RENSEIGNEMENT DES INFO DE LA NOUVELLE CATEGORIE dans produitmodificationform


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



                                            // bl TEST REVUE FORMULAIRE MODIFICATION produitmodificationform
    
     /*          
    window.addEventListener("load", lancementaddeventlistener); // lance les addeventlistener des champs au chargement de la page

    function surligne(champ, booleen)
    {
        if (booleen)
                {
                champ.style.backgroundColor = "#fba"; // colore le champ si erreur
                }
        else
                {
                champ.style.backgroundColor = "#FFFFFF"; // le champ reste blanc si vérification ok
                }
    }
    */

    //var val01 = val02 /*= val03 = val04 = val05 = val06 = val07 = val08*/ = false;// variables booléennes de validation
    var erreur = false; // variable de changement de couleur si une variable val = false

    // ID  AUTO INCREMENT DONC PAS DE VERIFICAITON


    // CATEGORIE  LISTE DEROULANTE DONC PAS DE VERIFICAITON


    //  REFERENCE de 1 à 10 caractères

    var reference = document.getElementById("reference");

    reference.addEventListener("change", verifreference);

    function verifreference()
                {
                    var erreurreference = document.getElementById("erreurreference");
                    var referencevalue = document.getElementById("reference").value;
                    console.log(referencevalue);

                    if (referencevalue.length < 1 || referencevalue.length > 10)
                            {
                                erreurreference.classList.remove("d-none");
                                erreurreference.style.backgroundColor = "#fba";
                                // surligne(referencevalue, true); // le booleen erreur de la fonction sruligne est true donc la couleur va être changée en conséquences
                                return;
                            }
                    else
                            {
                                erreurreference.classList.add("d-none");
                                // surligne(referencevalue, false);
                                return;
                            }
                }

//unblur= function() dans l'input dans le champ permet de vérifier directement la saisie du formulaire
 
//  LIBELLE - de 1 à 200 caractères

            var libelle = document.getElementById("libelle");

            libelle.addEventListener("change", veriflibelle);
        
            function veriflibelle()
                        {
                            var erreurlibelle = document.getElementById("erreurlibelle");
                            var libellevalue = document.getElementById("libelle").value;

                            if (libellevalue.length < 1 || libellevalue.length > 200)
                                    {
                                        erreurlibelle.classList.remove("d-none");
                                        erreurlibelle.style.backgroundColor = "#fba";
                                        return;
                                    }
                            else
                                    {
                                        erreurlibelle.classList.add("d-none");
                                        return;
                                    }
                        }


    // DESCRIPTION - de 1 à 1000 caractères


    var description = document.getElementById("description");

    description.addEventListener("change", verifdescription);

                        function verifdescription()
                        {
                            var erreurdescription = document.getElementById("erreurdescription");
                            var descriptionvalue = document.getElementById("description").value;

                            if (descriptionvalue.length < 1 || descriptionvalue.length > 200)
                                    {
                                        console.log("boucle false");
                                        erreurdescription.classList.remove("d-none");
                                        erreurdescription.style.backgroundColor = "#fba";
                                        return;
                                    }
                            else
                                    {
                                        console.log("boucle true");
                                        erreurdescription.classList.add("d-none");
                                        return;
                                    }
                        }
 
    //$ PRIX

    var prix = document.getElementById("prix");
    var prixvalue = document.getElementById("prix").value;

    prix.addEventListener("change", verifprix);

                        function verifprix()
                        {
                            var erreurprix = document.getElementById("erreurprix");
                            var prixvalue = document.getElementById("prix").value;
                            var checkprix = /(^[0-9]{1,4}(\.[0-9]{2,2})*$)/;
                    


                            if (checkprix.test(prix.value) == false)
                                    {
                                        console.log("boucle false");
                                        erreurprix.classList.remove("d-none");
                                        erreurprix.style.backgroundColor = "#fba";
                                        return;
                                    }
                            else
                                    {
                                        console.log("boucle true");
                                        erreurprix.classList.add("d-none");
                                        return;
                                    }
                        }

/*
                            var filtre = new RegExp("#^[0-9]{1,4}.[0-9]{2,2}$#");
                            var resultat = filtre.test(prixvalue);
                            console.log(resultat);

    ex d'expressions reg:
        var vreference = /(^[0-9A-Za-z\-]{1,10}$)/;
        var vnumero = /(^[0-9]+$)/;
        var vdescriptopn = /(^[0-9A-Za-zéèêâîïëûçŒœæ\.\,\-\s]+$)/;
        var vprix = /(^[0-9]+(\.[0-9]{1,2})?$)/;
/*

          /*
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

    Autre option = créer un span vide avec un ID 
    et le remplir dans javascript

                */ 


    