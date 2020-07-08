



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









